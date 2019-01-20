<?php
    function select($sql, $pola, $table) 
    {
        require_once "DatabaseConnection.php";
        $connection = @new mysqli($host, $db_user, $db_password, $db_name);

        if($connection->connect_errno != 0)
        {
            echo "Error: ".$connection->connect_errno;
        }
        else
        {
            $tresc = "</br>";

            if ($result = $connection->query($sql)) 
            {
                $ilepol = count($pola);
                $ile = $result->num_rows;

                switch($table)
                {
                    case 'kierowcy':
                        $tresc.=' <table id="tableData">
                                    <thead>
                                        <tr>
                                            <th>Nazwisko</th>
                                            <th>Imie</th>
                                            <th>Dowód osobisty</th>
                                            <th>Telefon</th>
                                            <th>Email</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>';
                    break;
                    case 'samochody':
                        $tresc.='<table id="tableData">
                                    <thead>
                                        <tr>
                                            <th>Marka</th>
                                            <th>Model</th>
                                            <th>Nr rejestracyjny</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>';
                    break;
                    case 'transporty':
                        $tresc.='<table id="tableData">
                                    <thead>
                                        <tr>
                                            <th>Kierowca</th>
                                            <th>Pojazd</th>
                                            <th>Towar</th>
                                            <th>Miejsce - wyjazd</th>
                                            <th>Miejsce - przyjazd</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>';
                    break;
                }
                
                while ($row = $result->fetch_object()) 
                {
                    $tresc.='<tr>';
                    for ($i = 1; $i < $ilepol; $i++) 
                    {
                        $p = $pola[$i];
                        $tresc.='<td>' . $row->$p . '</td>';
                    }
                    $p = $pola[0];
                    $tresc .= '<td class="tableBtn"><a href="../Pages/edit.php?table='.$table.'&id='.$row->$p.'" class="button">Edytuj</a></td>
                                <td class="tableBtn"><a href="../Pages/delete.php?table='.$table.'&id='.$row->$p.'" class="button">Usuń</a></td>';
                    $tresc.='</tr>';
                }
                $tresc.='</tbody></table>';
                $result->close();
            }
            $connection->close();
            return $tresc; 
        }
        $connection->close();
    }

    function selectData($sql, $pola, $table)
    {
        
    }

    function showDriversData()
    {
        $table = 'kierowcy';
        echo select('SELECT `id`, `imie`, `nazwisko`, `nr_dowod_osobisty`, `nr_tel`, `email` FROM `kierowcy` GROUP BY `nazwisko`', 
                    array('id', 'nazwisko', 'imie', 'nr_dowod_osobisty', 'nr_tel', 'email'), $table);
    }

    function showCarsData()
    {
        $table = 'samochody';
        echo select('SELECT `id`,`marka`, `model`, `nr_rejestracyjny` FROM `samochody` GROUP BY `marka`', 
                    array('id', 'marka', 'model', 'nr_rejestracyjny'), $table);
    }

    function showTransportsData()
    {
        $table = 'transporty';
        echo select('SELECT `id`, `id_kierowca`, `id_samochod`, `towar`, `miejsce_wyjazd`, `miejsce_przyjazd` FROM `transporty`', 
                    array('id', 'id_kierowca', 'id_samochod', 'towar', 'miejsce_wyjazd', 'miejsce_przyjazd'), $table);
    }

    function getSingleRow($table, $id)
    {
        require_once "DatabaseConnection.php";
        $connection = @new mysqli($host, $db_user, $db_password, $db_name);

        if($connection->connect_errno != 0)
        {
            echo "Error: ".$connection->connect_errno;
        }
        else
        {
            $sql = 'SELECT * FROM '.$table.' WHERE `id` = '.$id;
            $result = $connection->query($sql);
            $row = mysqli_fetch_row($result);
            $connection->close();
            return $row;
        }
        $connection->close();
    }

    function checkCarsInsertData($sql)
    {
        require_once "DatabaseConnection.php";
        $connection = @new mysqli($host, $db_user, $db_password, $db_name);

        if($connection->connect_errno != 0)
        {
            echo "Error: ".$connection->connect_errno;
        }
        else
        {
            if($result = @$connection->query($sql))
            {
                $carsCount = $result->num_rows;
                if($carsCount >= 1)
                {
                    $result->close();
                    return false;
                }
                else
                {
                    $result->close();
                    return true;
                }
            }
    
            $connection->close();
        }
        $connection->close();
    }

    function checkDriversInsertData($sql)
    {
        require_once "DatabaseConnection.php";
        $connection = @new mysqli($host, $db_user, $db_password, $db_name);

        if($connection->connect_errno != 0)
        {
            echo "Error: ".$connection->connect_errno;
        }
        else
        {
            if($result = @$connection->query($sql))
            {
                $driversCount = $result->num_rows;
                if($driversCount >= 1)
                {
                    $_SESSION['insertError'] = '<span style="color:red">Istnieje już kierowca o podanym numerze dowodu osobistego!</span>';
                    $result->close();
                    return false;
                }
                else
                {
                    $result->close();
                    return true;
                }
            }
    
            $connection->close();
        }
        $connection->close();
    }

?>
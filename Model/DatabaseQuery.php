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
                    case 'drivers':
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
                    case 'cars':
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
                    $tresc .= '<td class="tableBtn"><a href="../Controller/checkEdit.php?table='.$table.'&id='.$row->$p.'" class="button">Edytuj</a></td>
                                <td class="tableBtn"><a href="#" class="button">Usuń</a></td>';
                    $tresc.='</tr>';
                }
                $tresc.='</tbody></table>';
                $result->close();
            }
            return $tresc;
        }
    }

    function showDriversData()
    {
        $table = 'drivers';
        echo select('SELECT `id`, `imie`, `nazwisko`, `nr_dowod_osobisty`, `nr_tel`, `email` FROM `kierowcy` GROUP BY `nazwisko`', 
                    array('id', 'nazwisko', 'imie', 'nr_dowod_osobisty', 'nr_tel', 'email'), $table);
    }

    function showCarsData()
    {
        $table = 'cars';
        echo select('SELECT `id`,`marka`, `model`, `nr_rejestracyjny` FROM `samochody` GROUP BY `marka`', 
                    array('id', 'marka', 'model', 'nr_rejestracyjny'), $table);
    }

?>
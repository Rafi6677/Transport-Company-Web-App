<?php 

function showEditData($table, $id){
    require_once("../Model/DatabaseQuery.php");
    $arr = getSingleRow($table, $id);
    $data;
    switch($table){
        case 'kierowcy':
            $data = 'Edycja danych dla: '.$arr[1].' '.$arr[2];
            $data .= '
            <form action="../Controller/checkDriversEdit.php?id='.$id.'" method="POST" class="bg-white p-5 contact-form">
                <div class="form-group">
                    Imię:
                    <input type="text" name="name" class="form-control" value="'.$arr[1].'">
                </div>
                <div class="form-group">
                    Nazwisko:
                    <input type="text" name="surename" class="form-control" value="'.$arr[2].'">
                </div>
                <div class="form-group">
                    Nr dowodu osobistego:
                    <input type="text" name="idNumber" class="form-control" value="'.$arr[3].'">
                </div>
                <div class="form-group">
                    Nr telefonu
                    <input type="text" name="phone" class="form-control" value="'.$arr[4].'">
                </div>
                <div class="form-group">
                    Email:
                    <input type="text" name="mail" class="form-control" value="'.$arr[5].'">
                </div>
                <div class="form-group">
                    <input type="submit" value="Zmień" name="submit" class="btn btn-primary py-3 px-5">
                </div>
            </form>
            ';
            break;
        case 'samochody':
            $data = 'Edycja danych dla: '.$arr[1].' '.$arr[2];
            $data .= '
            <form action="../Controller/checkCarsEdit.php?id='.$id.'" method="POST" class="bg-white p-5 contact-form">
                <div class="form-group">
                    Marka:
                    <input type="text" name="brand" class="form-control" value="'.$arr[1].'">
                </div>
                <div class="form-group">
                    Model:
                    <input type="text" name="model" class="form-control" value="'.$arr[2].'">
                </div>
                <div class="form-group">
                    Nr rejestracyjny:
                    <input type="text" name="idNumber" class="form-control" value="'.$arr[3].'">
                </div>
                <div class="form-group">
                    <input type="submit" value="Zmień" name="submit" class="btn btn-primary py-3 px-5">
                </div>
            </form>
            ';
            break;
    }
    echo $data;
}

?>
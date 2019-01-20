<?php 

function showDeleteData($table, $id){
    require_once("../Model/DatabaseQuery.php");
    $arr = getSingleRow($table, $id);
    $data;
    switch($table){
        case 'kierowcy':
            $data = 'Kierowca: '.$arr[1].' '.$arr[2].' zostanie usunięty!';
            $data .= '
            <form action="../Controller/deleteDriver.php?id='.$id.'" method="POST" class="bg-white p-5 contact-form">
                <div class="form-group">
                    <input type="submit" value="Usuń" name="submit" class="btn btn-primary py-3 px-5">
                    <input type="cancel" value="Anuluj" name="cancel" class="btn btn-primary py-3 px-5">
                </div>
            </form>
            ';
        break;
        case 'samochody':
            $data = 'Pojazd: '.$arr[1].' '.$arr[2].' '.$arr[3].' zostanie usunięty!';
            $data .= '
            <form action="../Controller/deleteCar.php?id='.$id.'" method="POST" class="bg-white p-5 contact-form">
                <div class="form-group">
                    <input type="submit" value="Usuń" name="submit" class="btn btn-primary py-3 px-5">
                    <input type="cancel" value="Anuluj" name="cancel" class="btn btn-primary py-3 px-5">
                </div>
            </form>
            ';
        break;
    }
    echo $data;
}

?>
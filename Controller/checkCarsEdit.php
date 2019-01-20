<?php
 
    session_start();

    if(!isset($_SESSION['userLogged']))
    {
        header('Location: ../Pages/index.php');
        exit();
    }

    $id = $_GET['id'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $idNumber = $_POST['idNumber'];

    $sql = 'UPDATE `samochody` SET `marka` = "'.$brand.'", `model` = "'.$model.'", `nr_rejestracyjny` = "'.$idNumber.'" 
            WHERE `id` = "'.$id.'"';

    require_once("../Model/DatabaseOperation.php");
    changeData($sql);
    header('Location: ../Pages/cars.php');
    exit();
?>
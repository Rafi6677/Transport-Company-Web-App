<?php
 
    session_start();

    if(!isset($_SESSION['userLogged']))
    {
        header('Location: ../Pages/index.php');
        exit();
    }

    $id = $_GET['id'];
    $name = $_POST['name'];
    $surename = $_POST['surename'];
    $idNumber = $_POST['idNumber'];
    $phone = $_POST['phone'];
    $mail = $_POST['mail'];

    $sql = 'UPDATE `kierowcy` SET `imie` = "'.$name.'", `nazwisko` = "'.$surename.'", `nr_dowod_osobisty` = "'.$idNumber.'", 
            `nr_tel` = "'.$phone.'", `email` = "'.$mail.'" WHERE `id` = "'.$id.'"';

    require_once("../Model/DatabaseOperation.php");
    changeData($sql);
    header('Location: ../Pages/drivers.php');
    exit();

?>
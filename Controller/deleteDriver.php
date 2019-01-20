<?php
 
    session_start();

    if(!isset($_SESSION['userLogged']))
    {
        header('Location: ../Pages/index.php');
        exit();
    }

    $id = $_GET['id'];

    $sql = 'DELETE FROM `kierowcy` WHERE `id` = '.$id;

    require_once("../Model/DatabaseOperation.php");
    changeData($sql);
    header('Location: ../Pages/drivers.php');
    exit();
?>
<?php
 
    session_start();

    if(!isset($_SESSION['userLogged']))
    {
        header('Location: ../Pages/index.php');
        exit();
    }

    $surename = $_POST['surename'];
    $name = $_POST['name'];
    $idNumber = $_POST['idNumber'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $sqlCheck = 'SELECT * FROM `kierowcy` WHERE `nr_dowod_osobisty` = "'.$idNumber.'"';

    

    require_once("../Model/DatabaseQuery.php");

    require_once("../Model/DatabaseOperation.php");

    $sql = 'INSERT INTO `kierowcy`(`imie`, `nazwisko`, `nr_dowod_osobisty`, `nr_tel`, `email`) VALUES
                ("'.$name.'","'.$surename.'","'.$idNumber.'", "'.$phone.'", "'.$email.'")';
    changeData($sql);
    unset($_SESSION['insertDriversError']);
    header('Location: ../Pages/drivers.php');
    exit();

    /*
    if(checkDriversInsertData($sqlCheck))
    {
        require_once("../Model/DatabaseOperation.php");

        $sql = 'INSERT INTO `kierowcy`(`imie`, `nazwisko`, `nr_dowod_osobisty`, `nr_tel`, `email`) VALUES
                 ("'.$name.'","'.$surename.'","'.$idNumber.'", "'.$phone.'", "'.$email.'")';
        changeData($sql);
        unset($_SESSION['insertDriversError']);
        header('Location: ../Pages/drivers.php');
        exit();
    }
    else
    {
        $_SESSION['insertDriversError'] = '<span style="color:red">Kierowca o podanym numerze dowodu osobistego już istnieje!</span>';
        header('Location: ../Pages/insert.php?table=kierowcy');
        exit();
    }
    */
    
?>
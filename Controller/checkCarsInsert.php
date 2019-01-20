<?php
 
    session_start();

    if(!isset($_SESSION['userLogged']))
    {
        header('Location: ../Pages/index.php');
        exit();
    }

    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $idNumber = $_POST['idNumber'];

    $sqlCheck = 'SELECT * FROM samochody WHERE nr_rejestracyjny = "'.$idNumber.'"';

    

    require_once("../Model/DatabaseQuery.php");

    require_once("../Model/DatabaseOperation.php");

    $sql = 'INSERT INTO `samochody`(`marka`, `model`, `nr_rejestracyjny`) VALUES ("'.$brand.'","'.$model.'","'.$idNumber.'")';
    changeData($sql);
    unset($_SESSION['insertCarsError']);
    header('Location: ../Pages/cars.php');
    exit();

    /*
    if(checkCarsInsertData($sqlCheck))
    {
        require_once("../Model/DatabaseOperation.php");

        $sql = 'INSERT INTO `samochody`(`marka`, `model`, `nr_rejestracyjny`) VALUES ("'.$brand.'","'.$model.'","'.$idNumber.'")';
        changeData($sql);
        unset($_SESSION['insertCarsError']);
        header('Location: ../Pages/cars.php');
        exit();
    }
    else
    {
        $_SESSION['insertCarsError'] = '<span style="color:red">Pojazd o podanym numerze rejestracyjnym już istnieje!</span>';
        header('Location: ../Pages/insert.php?table=samochody');
        exit();
    }
    */
    
?>
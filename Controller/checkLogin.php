<?php
    session_start();

    if((!isset($_POST['login'])) || (!isset($_POST['password'])))
    {
        header('Location: ../View/index.php');
        exit();
    }

    require_once "../Model/DatabaseConnection.php";

    $connection = @new mysqli($host, $db_user, $db_password, $db_name);

    if($connection->connect_errno != 0)
    {
        echo "Error: ".$connection->connect_errno;
    }
    else
    {
        $login = $_POST['login'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM administratorzy WHERE login='$login' AND haslo='$password'";

        if($result = @$connection->query($sql))
        {
            $userCount = $result->num_rows;
            if($userCount > 0)
            {
                $_SESSION['userLogged'] = true;

                $row = $result->fetch_assoc();
                $_SESSION['id'] = $row['id'];

                $_SESSION['user'] = $row['login'];
                $_SESSION['name'] = $row['imie'];
                $_SESSION['surename'] = $row['nazwisko'];
 
                unset($_SESSION['loginError']);
                $result->close();
                header('Location: ../View/indexUserLogged.php');
            }
            else
            {
                $_SESSION['loginError'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
                header('Location: ../View/login.php');
            }
        }

        $connection->close();
    }   
?>
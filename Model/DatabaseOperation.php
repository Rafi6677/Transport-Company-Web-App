<?php 

function changeData($sql){
    require_once "DatabaseConnection.php";
    $connection = @new mysqli($host, $db_user, $db_password, $db_name);

    if($connection->connect_errno != 0)
    {
        echo "Error: ".$connection->connect_errno;
    }
    else
    {
        $connection->query($sql);
    }
}

?>
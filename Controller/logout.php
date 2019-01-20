<?php

    session_start();
    session_unset();
    header('Location: ../Pages/index.php');

?>
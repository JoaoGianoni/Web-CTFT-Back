<?php

    session_start();
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    unset($_SESSION['id']);
    header("Location: ../login/login.php")

?>
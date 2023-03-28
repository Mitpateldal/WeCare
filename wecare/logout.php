<?php
        session_start() ;
        $_SESSION['id']="";
        $_SESSION['firstname']="";
        session_unset($_SESSION['id']);
        session_unset($_SESSION['firstname']);

        header('Location:login.php');
?>
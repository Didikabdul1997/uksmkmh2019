<?php
session_start();
    if($_SESSION['status']!='loged'){
        header("location:../login/login.php");
    }else{
    }
?>
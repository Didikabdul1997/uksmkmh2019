<?php
    include "../bantu/koneksi.php";
    $ID_Customer   = $_GET['ID_Customer'];
    $login = mysqli_query($koneksi,"delete from customer where ID_Customer='$ID_Customer'") or die(mysqli_error()."errorrorororororof");
    header("location:data_Customer.php");
?>
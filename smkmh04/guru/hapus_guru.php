<?php
    include "../bantu/koneksi.php";
    $NIP   = $_GET['NIP'];
    $login = mysqli_query($koneksi,"delete from guru where NIP='$NIP'") or die(mysqli_error()."errorrorororororof");
    header("location:data_guru.php");
?>
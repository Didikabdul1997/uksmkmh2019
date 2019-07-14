<?php
    include "../bantu/koneksi.php";
    $id_kontrakan  = $_GET['id_kontrakan'];
    $login = mysqli_query($koneksi,"delete from kontrakan where id_kontrakan='$id_kontrakan'") or die(mysqli_error()."errorrorororororof");
    header("location:data_kontrakan.php");
?>
<?php
    include "../bantu/koneksi.php";
    $id   = $_GET['id'];
    $login = mysqli_query($koneksi,"delete from burung where id='$id'") or die(mysqli_error()."errorrorororororof");
    header("location:data_burung.php");
?>
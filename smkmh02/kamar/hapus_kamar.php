<?php
    include "../bantu/koneksi.php";
    $No_kamar   = $_GET['No_kamar'];
    $login = mysqli_query($koneksi,"delete from kamar where No_kamar='$No_kamar'") or die(mysqli_error()."errorrorororororof");
    header("location:data_kamar.php");
?>
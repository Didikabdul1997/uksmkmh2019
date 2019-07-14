<?php
    include "../bantu/koneksi.php";
    $Kode_film   = $_GET['Kode_film'];
    $login = mysqli_query($koneksi,"delete from film where Kode_film='$Kode_film'") or die(mysqli_error()."error");
    header("location:tbl_film.php");
?>
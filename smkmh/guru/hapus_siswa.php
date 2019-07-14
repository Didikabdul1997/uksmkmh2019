<?php
    include "../bantu/koneksi.php";
    $nisn   = $_GET['nisn'];
    $login = mysqli_query($koneksi,"delete from siswa where nisn='$nisn'") or die(mysqli_error()."errorrorororororof");
    header("location:data_siswa.php");
?>
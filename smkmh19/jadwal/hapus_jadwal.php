<?php
    include "../bantu/koneksi.php";
    $id_jadwal   = $_GET['id_jadwal'];
    $login = mysqli_query($koneksi,"delete from jadwal where id_jadwal='$id_jadwal'") or die(mysqli_error()."errorrorororororof");
    header("location:data_jadwal.php");
?>
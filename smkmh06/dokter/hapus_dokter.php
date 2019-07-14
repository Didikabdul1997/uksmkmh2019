<?php
    include "../bantu/koneksi.php";
    $id_dokter   = $_GET['id_dokter'];
    $login = mysqli_query($koneksi,"delete from dokter where id_dokter='$id_dokter'") or die(mysqli_error()."errorrorororororof");
    header("location:data_dokter.php");
?>
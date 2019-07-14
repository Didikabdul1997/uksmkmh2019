<?php
    include "../bantu/koneksi.php";
    $id_pasien   = $_GET['id_pasien'];
    $login = mysqli_query($koneksi,"delete from pasien where id_pasien='$id_pasien'") or die(mysqli_error()."errorrorororororof");
    header("location:data_pasien.php");
?>
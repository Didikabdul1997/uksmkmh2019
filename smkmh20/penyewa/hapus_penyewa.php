<?php
    include "../bantu/koneksi.php";
    $id_penyewa   = $_GET['id_penyewa'];
    $login = mysqli_query($koneksi,"delete from penyewa where id_penyewa='$id_penyewa'") or die(mysqli_error()."errorrorororororof");
    header("location:data_penyewa.php");
?>
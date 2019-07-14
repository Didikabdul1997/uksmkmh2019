<?php
    include "../bantu/koneksi.php";
    $id_obat  = $_GET['id_obat'];
    $login = mysqli_query($koneksi,"delete from obat where id_obat='$id_obat'") or die(mysqli_error()."errorrorororororof");
    header("location:data_obat.php");
?>
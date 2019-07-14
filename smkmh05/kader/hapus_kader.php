<?php
    include "../bantu/koneksi.php";
    $id_kader   = $_GET['id_kader'];
    $login = mysqli_query($koneksi,"delete from kader where id_kader='$id_kader'") or die(mysqli_error()."errorrorororororof");
    header("location:data_kader.php");
?>
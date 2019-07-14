<?php
    include "../bantu/koneksi.php";
    $id_surat   = $_GET['id_surat'];
    $login = mysqli_query($koneksi,"delete from Surat where id_surat='$id_surat'") or die(mysqli_error()."errorrorororororof");
    header("location:data_Surat.php");
?>
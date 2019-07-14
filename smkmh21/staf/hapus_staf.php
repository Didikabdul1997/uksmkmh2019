<?php
    include "../bantu/koneksi.php";
    $id_staf = $_GET['id_staf'];
    $nama_staf= $_GET['nama_staf'];
    $alamat= $_GET['alamat'];
    $login = mysqli_query($koneksi,"delete from staf_1 where id_staf='$id_staf'") or die(mysqli_error()."errorrorororororof");
    header("location:data_staf.php");
?>
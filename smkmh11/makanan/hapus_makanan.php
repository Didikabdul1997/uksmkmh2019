<?php
    include "../bantu/koneksi.php";
    $id_makanan   = $_GET['id_makanan'];
    $login = mysqli_query($koneksi,"delete from makanan where id_makanan='$id_makanan'") or die(mysqli_error()."errorrorororororof");
    header("location:data_makanan.php");
?>
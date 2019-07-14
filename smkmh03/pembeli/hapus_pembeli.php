<?php
    include "../bantu/koneksi.php";
    $id_pembeli   = $_GET['id_pembeli'];
    $login = mysqli_query($koneksi,"delete from pembeli where id_pembeli='$id_pembeli'") or die(mysqli_error()."errorrorororororof");
    header("location:data_pembeli.php");
?>
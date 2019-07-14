<?php
    include "../bantu/koneksi.php";
    $id_penumpang   = $_GET['id_penumpang'];
    $login = mysqli_query($koneksi,"delete from penumpang where id_penumpang='$id_penumpang'") or die(mysqli_error()."errorrorororororof");
    header("location:data_penumpang.php");
?>
<?php
    include "../bantu/koneksi.php";
    $id_sanksi   = $_GET['id_sanksi'];
    $login = mysqli_query($koneksi,"delete from sanksi where id_sanksi='$id_sanksi'") or die(mysqli_error()."errorrorororororof");
    header("location:data_sanksi.php");
?>
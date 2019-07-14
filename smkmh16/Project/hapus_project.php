<?php
    include "../bantu/koneksi.php";
    $id_Project   = $_GET['id_Project'];
    $login = mysqli_query($koneksi,"delete from Project where id_Project='$id_Project'") or die(mysqli_error()."errorrorororororof");
    header("location:data_Project.php");
?>
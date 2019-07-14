<?php
    include "../bantu/koneksi.php";
    $nis   = $_GET['nis'];
    $login = mysqli_query($koneksi,"delete from santri where nis='$nis'") or die(mysqli_error()."errorrorororororof");
    header("location:data_santri.php");
?>
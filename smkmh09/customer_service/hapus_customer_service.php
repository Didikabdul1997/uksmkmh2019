<?php
    include "../bantu/koneksi.php";
    $ID_customer_service   = $_GET['ID_customer_service'];
    $login = mysqli_query($koneksi,"delete from customer_service where ID_customer_service='$ID_customer_service'") or die(mysqli_error()."errorrorororororof");
    header("location:data_customer_service.php");
?>
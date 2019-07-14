<?php
    include "../bantu/koneksi.php";
    $ID_customer   = $_GET['ID_customer'];
    $login = mysqli_query($koneksi,"delete from customer where ID_customer='$ID_customer'") or die(
    	mysqli_error()."errorrorororororof");
    header("location:data_customer.php");
?>

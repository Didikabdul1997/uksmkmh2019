<?php
    include "../bantu/koneksi.php";
    $ID_Customer    = $_POST['ID_Customer'];
    $ID_Customer_Service = $_POST['ID_Customer_Service'];
    $Tanggal_Beli = $_POST['Tanggal_Beli'];
    $Total_Bayar = $_POST['Total_Bayar'];
    $login = mysqli_query($koneksi,"insert into beli(ID_Customer,ID_Customer_Service,Tanggal_Beli,Total_Bayar) values('$ID_Customer','$ID_Customer_Service','$Tanggal_Beli','$Total_Bayar')")or die(mysqli_error());
    if($login){
        header("location:data_beli.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
<?php
    include "../bantu/koneksi.php";
    $ID_Customerawal = $_POST['ID_Customerawal'];
    $ID_Customer = $_POST['ID_Customer'];
    $ID_Customer_Service   = $_POST['ID_Customer_Service'];
    $Tanggal_Beli   = $_POST['Tanggal_Beli'];
    $Total_Bayar    = $_POST['Total_Bayar'];
    $query = "update beli set ID_Customer='$ID_Customer', ID_Customer_Service='$ID_Customer_Service', Tanggal_Beli='$Tanggal_Beli', Total_Bayar='$Total_Bayar' where ID_Customer='$ID_Customerawal'";
    echo $query;
    $edit = mysqli_query($koneksi,$query)or die(mysqli_error());
    if($edit){
        header("location:data_beli.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
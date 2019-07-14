<?php
    include "../bantu/koneksi.php";
    $Nama_Lengkap   = $_POST['Nama_Lengkap'];
    $TTL    = $_POST['TTL'];
    $Alamat = $_POST['Alamat'];
    $query = "insert into customer(Nama_Lengkap,TTL,Alamat) values('$Nama_Lengkap','$TTL','$Alamat')";
    echo $query;
    $login = mysqli_query($koneksi,$query)or die(mysqli_error());
    if($login){
        header("location:data_customer.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
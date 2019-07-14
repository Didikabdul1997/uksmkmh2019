<?php
    include "../bantu/koneksi.php";
    $No_kamar      = $_POST['No_kamar'];
    $status        = $_POST['status'];
    $harga         = $_POST['harga'];
    $ID_service    = $_POST['ID_service'];
    $login = mysqli_query($koneksi,"insert into kamar(No_kamar,status,harga,ID_service) values('$No_kamar','$status','$harga','$ID_service')");
    if($login){
        header("location:data_kamar.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
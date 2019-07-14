<?php
    include "../bantu/koneksi.php";
    $No_kamarawal = $_POST['No_kamarawal'];
    $No_kamar   = $_POST['No_kamar'];
    $status     = $_POST['status'];
    $harga      = $_POST['harga'];
    $ID_service  = $_POST['ID_service'];
    $edit = mysqli_query($koneksi,"update kamar set No_kamar='$No_kamar', status='$status', harga='$harga', ID_service='$ID_service' where No_kamar='$No_kamarawal'");
    if($edit){
        header("location:data_kamar.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
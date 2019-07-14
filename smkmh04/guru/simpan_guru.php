<?php
    include "../bantu/koneksi.php";
    $NIP   = $_POST['NIP'];
    $Nama   = $_POST['Nama'];
    $TTL    = $_POST['TTL'];
    $Alamat = $_POST['Alamat'];
    $login = mysqli_query($koneksi,"insert into guru(NIP,Nama,TTL,Alamat) values('$NIP','$Nama','$TTL','$Alamat')");
    if($login){
        header("location:data_guru.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
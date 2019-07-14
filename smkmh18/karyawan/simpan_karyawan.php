<?php
    include "../bantu/koneksi.php";
    $Nama_Karyawan   = $_POST['Nama_Karyawan'];
    $TTL    = $_POST['TTL'];
    $Jns_Kel    = $_POST['Jns_Kel'];
    $Alamat = $_POST['Alamat'];
    $login = mysqli_query($koneksi,"insert into Karyawan(Nama_Karyawan,TTL,Jns_Kel,Alamat) values('$Nama_Karyawan','$TTL','$Jns_Kel','$Alamat')");
    if($login){
        header("location:data_Karyawan.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
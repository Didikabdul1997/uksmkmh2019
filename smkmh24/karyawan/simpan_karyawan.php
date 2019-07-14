<?php
    include "../bantu/koneksi.php";
    $Nama_Karyawan   = $_POST['Nama_Karyawan'];
    $Alamat    = $_POST['Alamat'];
    $TTL = $_POST['TTL'];
    $Jenis_Kelamin  = $_POST['Jenis_Kelamin'];
    $No_Telp   = $_POST['No_Telp'];
    $login = mysqli_query($koneksi,"insert into karyawan(Nama_Karyawan,Alamat,TTL,Jenis_Kelamin,No_Telp) values('$Nama_Karyawan','$Alamat','$TTL','$Jenis_Kelamin','$No_Telp')")or die(mysqli_error());
    if($login){
        header("location:data_karyawan.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
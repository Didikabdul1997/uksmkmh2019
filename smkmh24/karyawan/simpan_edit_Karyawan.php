<?php
    include "../bantu/koneksi.php";
    $Id_Karyawanawal   = $_POST['Id_Karyawanawal'];
    $Id_Karyawan   = $_POST['Id_Karyawan'];
    $Nama_Karyawan   = $_POST['Nama_Karyawan'];
    $Alamat   = $_POST['Alamat'];
    $TTL    = $_POST['TTL'];
    $Jenis_Kelamin = $_POST['Jenis_Kelamin'];
    $No_Telp    = $_POST['No_Telp'];
    $edit = mysqli_query($koneksi,"update karyawan set Id_Karyawan='$Id_Karyawan', Nama_Karyawan='$Nama_Karyawan', Alamat='$Alamat', TTL='$TTL', Jenis_Kelamin='$Jenis_Kelamin', No_Telp='$No_Telp' where Id_Karyawan='$Id_Karyawanawal'")or die(mysqli_error());
    if($edit){
        header("location:data_karyawan.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
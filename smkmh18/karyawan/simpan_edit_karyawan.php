<?php
    include "../bantu/koneksi.php";
    $ID_Karyawanawal = $_POST['ID_Karyawanawal'];
    $ID_Karyawan   = $_POST['ID_Karyawan'];
    $Nama_Karyawan   = $_POST['Nama_Karyawan'];
    $TTL    = $_POST['TTL'];
    $Jns_Kel    = $_POST['Jns_Kel'];
    $Alamat = $_POST['Alamat'];
    $query = "update karyawan set ID_Karyawan='$ID_Karyawan', Nama_Karyawan='$Nama_Karyawan', TTL='$TTL',Jns_Kel='$Jns_Kel', Alamat='$Alamat' where ID_Karyawan='$ID_Karyawanawal'";
    echo $query;
    $edit = mysqli_query($koneksi,$query)or die(mysqli_error());
    if($edit){
        header("location:Data_karyawan.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
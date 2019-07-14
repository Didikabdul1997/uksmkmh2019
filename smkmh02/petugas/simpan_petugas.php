<?php
    include "../bantu/koneksi.php";
    $ID_petugas         = $_POST['ID_petugas'];
    $Nama_petugas       = $_POST['Nama_petugas'];
    $Jabatan_petugas    = $_POST['Jabatan_petugas'];
    $login = mysqli_query($koneksi,"insert into petugas(ID_petugas,Nama_petugas,Jabatan_petugas) values('$ID_petugas','$Nama_petugas','$Jabatan_petugas')");
    if($login){
        header("location:data_petugas.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
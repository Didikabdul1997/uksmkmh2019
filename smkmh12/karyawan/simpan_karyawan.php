<?php
    include "../bantu/koneksi.php";
    $id_karyawan   = $_POST['id_karyawan'];
    $nama_karyawan   = $_POST['nama_karyawan'];
    $alamat    = $_POST['alamat'];
    $ttl = $_POST['ttl'];
    $telepon = $_POST['telepon'];
    $login = mysqli_query($koneksi,"insert into karyawan(id_karyawan,nama_karyawan,alamat,ttl,telepon) values('$id_karyawan','$nama_karyawan','$alamat','$ttl','telepon')");
    if($login){
        header("location:data_karyawan.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
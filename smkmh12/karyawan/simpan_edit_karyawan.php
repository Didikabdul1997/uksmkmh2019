<?php
    include "../bantu/koneksi.php";
    $id_karyawan = $_POST['id_karyawan'];
    $nama_karyawan   = $_POST['nama_karyawan'];
    $alamat  = $_POST['alamat'];
    $ttl    = $_POST['ttl'];
    $telepon = $_POST['telepon'];
    $edit = mysqli_query($koneksi,"update karyawan set nama_karyawan='$nama_karyawan', alamat='$alamat', ttl='$ttl',telepon='$telepon' where id_karyawan='$id_karyawan'");
    if($edit){
        header("location:data_karyawan.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
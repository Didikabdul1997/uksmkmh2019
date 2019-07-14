<?php
    include "../bantu/koneksi.php";
    $id_karyawan = $_POST['id_karyawan'];
    $nama   = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $ttl    = $_POST['ttl'];
    $edit = mysqli_query($koneksi,"update karyawan set id_karyawan='$id_karyawan', nama='$nama', alamat='$alamat', telepon='$telepon', jenis_kelamin='$jenis_kelamin', ttl='$ttl' where id_karyawan='$id_karyawan'");
    if($edit){
        header("location:data_karyawan.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
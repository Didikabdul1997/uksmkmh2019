<?php
    include "../bantu/koneksi.php";
    $nama   = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $ttl    = $_POST['ttl'];
    $login = mysqli_query($koneksi,"insert into Karyawan(nama, alamat, telepon, jenis_kelamin, ttl) values('$nama','$alamat', '$telepon','$jenis_kelamin','$ttl')");
    if($login){
        header("location:data_karyawan.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
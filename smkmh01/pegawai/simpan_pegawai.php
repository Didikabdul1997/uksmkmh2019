<?php
    include "../bantu/koneksi.php";
    $nama_pegawai   = $_POST['nama_pegawai'];
    $ttl    = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $login = mysqli_query($koneksi,"insert into pegawai(nama_pegawai,ttl,alamat) values('$nama_pegawai','$ttl','$alamat')");
    if($login){
        header("location:data_pegawai.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
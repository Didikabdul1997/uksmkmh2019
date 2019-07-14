<?php
    include "../bantu/koneksi.php";
    $nama   = $_POST['nama'];
    $ttl    = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $login = mysqli_query($koneksi,"insert into karyawan(nama,ttl,alamat) values('$nama','$ttl','$alamat')");
    if($login){
        header("location:data_karyawan.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
<?php
    include "../bantu/koneksi.php";
    $nama   = $_POST['nama'];
    $TTL    = $_POST['TTL'];
    $jenis_kelamin    = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $login = mysqli_query($koneksi,"insert into karyawan(nama,TTL,jenis_kelamin,alamat) values('$nama','$TTL','$jenis_kelamin','$alamat')");
    if($login){
        header("location:data_karyawan.php");
    }else{
        //echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
<?php
    include "../bantu/koneksi.php";
    $id_karyawan   = $_POST['id_karyawan'];
    $nama_karyawan   = $_POST['nama_karyawan'];
     $jenis_kelamin   = $_POST['jenis_kelamin'];
    $ttl    = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $no_hp   = $_POST['no_hp'];
    $login = mysqli_query($koneksi,"insert into karyawan(id_karyawan,nama_karyawan,jenis_kelamin,ttl,alamat,no_hp) values('$id_karyawan','$nama_karyawan','$jenis_kelamin','$ttl','$alamat','$no_hp')");
    if($login){
        header("location:data_karyawan.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
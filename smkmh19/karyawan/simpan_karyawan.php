<?php
    include "../bantu/koneksi.php";
    $id_karyawan = $_POST['id_karyawan'];
    $nama   = $_POST['nama'];
    $ttl    = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $jurusan = $_POST['jurusan'];
    $login = mysqli_query($koneksi,"insert into karyawan(id_karyawan,nama,ttl,alamat,jenis_kelamin,jurusan) values ('$id_karyawan','$nama','$ttl','$alamat','$jenis_kelamin','$jurusan')");
    if($login){
        header("location:data_karyawan.php");
    }else{
        echo "<script>alert('Gagal di simpan!!');history.go(-1);</script>";
    }    
?>
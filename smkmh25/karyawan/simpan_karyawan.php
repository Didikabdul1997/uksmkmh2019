<?php
    include "../bantu/koneksi.php";
    $ID_karyawan   = $_POST['ID_karyawan'];
    $nama   = $_POST['nama'];
    $ttl    = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $login = mysqli_query($koneksi,"insert into karyawan(ID_karyawan,nama,ttl,alamat,jenis_kelamin) values('$ID_karyawan','$nama','$ttl','$alamat','$jenis_kelamin')")or die(mysqli_error());
    if($login){
        header("location:data_karyawan.php");
    }else{
       echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
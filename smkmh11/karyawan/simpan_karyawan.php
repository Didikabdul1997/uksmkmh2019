<?php
    include "../bantu/koneksi.php";
    $id_karyawan   = $_POST['id_karyawan'];
    $nama_karyawan  = $_POST['nama_karyawan'];
    $no_hp = $_POST['no_hp'];
    $ttl    = $_POST['ttl'];
    $login = mysqli_query($koneksi,"insert into karyawan(id_karyawan,nama_karyawan,no_hp,ttl) values('$id_karyawan','$nama_karyawan','$no_hp','$ttl')")or die(mysqli_error());
    if($login){
        header("location:data_karyawan.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
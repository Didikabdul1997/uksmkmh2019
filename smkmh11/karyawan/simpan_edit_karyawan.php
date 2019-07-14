<?php
    include "../bantu/koneksi.php";
    $id_karyawanawal = $_POST['id_karyawanawal'];
    $id_karyawan   = $_POST['id_karyawan'];
    $nama_karyawan   = $_POST['nama_karyawan'];
    $no_hp    = $_POST['no_hp'];
    $ttl = $_POST['ttl'];
    $edit = mysqli_query($koneksi,"update karyawan set id_karyawan='$id_karyawan',nama_karyawan='$nama_karyawan', no_hp='$no_hp',ttl='$ttl' where id_karyawan='$id_karyawanawal'")or die(mysqli_error());
    if($edit){
        header("location:data_karyawan.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
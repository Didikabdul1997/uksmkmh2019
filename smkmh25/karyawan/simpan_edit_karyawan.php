<?php
    include "../bantu/koneksi.php";
    $ID_karyawanawal = $_POST['ID_karyawanawal'];
    $ID_karyawan   = $_POST['ID_karyawan'];
    $nama   = $_POST['nama'];
    $ttl    = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $edit = mysqli_query($koneksi,"update karyawan set ID_karyawan='$ID_karyawan', nama='$nama', ttl='$ttl', alamat='$alamat',jenis_kelamin='$jenis_kelamin' where ID_karyawan='$ID_karyawanawal'");
    if($edit){
        header("location:data_karyawan.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
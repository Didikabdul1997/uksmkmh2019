<?php
    include "../bantu/koneksi.php";
    $id_karyawan   = $_POST['id_karyawan'];
    $nama   = $_POST['nama'];
    $ttl    = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $edit = mysqli_query($koneksi,"update karyawan set nama='$nama', ttl='$ttl', alamat='$alamat' where id_karyawan='$id_karyawan'");
    if($edit){
        header("location:data_karyawan.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
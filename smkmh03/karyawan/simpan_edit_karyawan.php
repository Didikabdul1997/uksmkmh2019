<?php
    include "../bantu/koneksi.php";
    $id_karyawanawal = $_POST['id_karyawanawal'];
    $id_karyawan = $_POST['id_karyawan'];
    $nama   = $_POST['nama'];
    $ttl   = $_POST['ttl'];
    $jenis_kelamin   = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $edit = mysqli_query($koneksi,"update karyawan set id_karyawan='$id_karyawan',nama='$nama', ttl='$ttl', jenis_kelamin='$jenis_kelamin', alamat='$alamat' where id_karyawan='$id_karyawanawal'")or die(mysqli_error());
    if($edit){
        header("location:data_karyawan.php");
    }else{
        //echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
<?php
    include "../bantu/koneksi.php";
    $id_karyawanawal = $_POST['id_karyawanawal'];
    $id_karyawan = $_POST['id_karyawan'];
    $nama = $_POST['nama'];
    $ttl   = $_POST['ttl'];
    $alamat   = $_POST['alamat'];
    $jenis_kelamin    = $_POST['jenis_kelamin'];
    $jurusan = $_POST['jurusan'];
    $edit = mysqli_query($koneksi,"update karyawan set id_karyawan='$id_karyawan', nama='$nama', ttl='$ttl', alamat='$alamat', jenis_kelamin='$jenis_kelamin', jurusan='$jurusan' where id_karyawan='$id_karyawanawal'");
    if($edit){
        header("location:data_karyawan.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
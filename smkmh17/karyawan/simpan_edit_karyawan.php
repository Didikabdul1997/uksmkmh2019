<?php
    include "../bantu/koneksi.php";
    $id_karyawanawal = $_POST['id_karyawanawal'];
    $id_karyawan   = $_POST['id_karyawan'];
    $nama_karyawan   = $_POST['nama_karyawan'];
    $jenis_kelamin    = $_POST['jenis_kelamin'];
    $ttl    = $_POST['ttl'];
    $alamat    = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $query = "update karyawan set id_karyawan='$id_karyawan', nama_karyawan='$nama_karyawan', jenis_kelamin='$jenis_kelamin', ttl='$ttl', alamat='$alamat', no_hp='$no_hp' where id_karyawan='$id_karyawanawal'";
    echo $query;
    $edit = mysqli_query($koneksi,$query);
    if($edit){
        header("location:data_karyawan.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
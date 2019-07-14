<?php
    include "../bantu/koneksi.php";
    $id_pembeli   = $_POST['id_pembeli'];
    $nama_pembeli   = $_POST['nama_pembeli'];
    $jenis_kelamin    = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $login = mysqli_query($koneksi,"insert into pembeli(id_pembeli,nama_pembeli,jenis_kelamin,alamat) values('$id_pembeli','$nama_pembeli','$jenis_kelamin','$alamat')");
    if($login){
        header("location:data_pembeli.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
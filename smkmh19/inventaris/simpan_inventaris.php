<?php
    include "../bantu/koneksi.php";
    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $tanggal_masuk = $_POST['tanggal_masuk'];
    $jumlah = $_POST['jumlah'];
    $login = mysqli_query($koneksi,"insert into inventaris(id_barang,nama_barang,tanggal_masuk,jumlah) values('$id_barang','$nama_barang','$tanggal_masuk','$jumlah')");
    if($login){
        header("location:data_inventaris.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
<?php
    include "../bantu/koneksi.php";
    $id_barang   = $_POST['id_barang'];
    $jumlah_barang   = $_POST['jumlah_barang'];
    $judul_buku    = $_POST['judul_buku'];
    $harga = $_POST['harga'];
    $login = mysqli_query($koneksi,"insert into barang(id_barang,jumlah_barang,judul_buku,harga) values('$id_barang','$jumlah_barang','$judul_buku','$harga')");
    if($login){
        header("location:data_barang.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
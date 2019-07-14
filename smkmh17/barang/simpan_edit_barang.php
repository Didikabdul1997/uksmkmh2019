<?php
    include "../bantu/koneksi.php";
    $id_barangawal = $_POST['id_barangawal'];
    $id_barang   = $_POST['id_barang'];
    $jumlah_barang   = $_POST['jumlah_barang'];
    $judul_buku    = $_POST['judul_buku'];
    $harga = $_POST['harga'];
    $edit = mysqli_query($koneksi,"update barang set id_barang='$id_barang', jumlah_barang='$jumlah_barang', judul_buku='$judul_buku', harga='$harga' where id_barang='$id_barangawal'");
    if($edit){
        header("location:data_barang.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
<?php
    include "../bantu/koneksi.php";
    $id_barang = $_POST['id_barang'];
    $nama_barang   = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $jumlah_stok = $_POST['jumlah_stok'];
    $edit = mysqli_query($koneksi,"update barang set nama_barang='$nama_barang', harga='$harga', jumlah_stok='$jumlah_stok' where id_barang='$id_barang'");
    if($edit){
        header("location:data_barang.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
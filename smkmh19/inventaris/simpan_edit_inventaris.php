<?php
    include "../bantu/koneksi.php";
    $id_barangawal = $_POST['id_barangawal'];
    $id_barang = $_POST['id_barang'];
    $nama_barang   = $_POST['nama_barang'];
    $tanggal_masuk   = $_POST['tanggal_masuk'];
    $jumlah    = $_POST['jumlah'];
    $edit = mysqli_query($koneksi,"update inventaris set id_barang='$id_barang', nama_barang='$nama_barang', tanggal_masuk='$tanggal_masuk', jumlah='$jumlah' where id_barang='$id_barangawal'");
    if($edit){
        header("location:data_inventaris.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
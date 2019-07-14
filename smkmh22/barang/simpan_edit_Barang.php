<?php
    include "../bantu/koneksi.php";
    $kode_barangawal = $_POST['kode_barangawal'];
    $kode_barang  = $_POST['kode_barang'];
    $jenis_barang   = $_POST['jenis_barang'];
    $jumlah_barang   = $_POST['jumlah_barang'];
    $harga    = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
    $edit = mysqli_query($koneksi,"update barang set  jenis_barang='$jenis_barang', jumlah_barang='$jumlah_barang', harga='$harga', jumlah='$jumlah' where kode_barang='$kode_barangawal'");
    if($edit){
        header("location:data_barang.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
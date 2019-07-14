<?php
    include "../bantu/koneksi.php";
    $idawal = $_POST['idawal'];
    $ID_barang   = $_POST['ID_barang'];
    $nama   = $_POST['nama'];
    $harga   = $_POST['harga'];
    $tgl_pembelian = $_POST['tgl_pembelian'];
    $jumlah_stok = $_POST['jumlah_stok'];
    $edit = mysqli_query($koneksi,"update barang set ID_barang='$ID_barang', nama='$nama', harga='$harga', tgl_pembelian='$tgl_pembelian' where ID_barang='$idawal'");
    if($edit){
        header("location:data_barang.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
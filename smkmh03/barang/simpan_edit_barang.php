<?php
    include "../bantu/koneksi.php";
    $id_barangawal = $_POST['id_barangawal'];
    $nama_barang  = $_POST['nama_barang'];
    $tgl_pembelian  = $_POST['tgl_pembelian'];
    $jumlah   = $_POST['jumlah'];
    $harga = $_POST['harga'];
    $edit = mysqli_query($koneksi,"update barang set nama_barang='$nama_barang',tgl_pembelian='$tgl_pembelian', jumlah='$jumlah', harga='$harga' where id_barang='$id_barangawal'")or die(mysqli_error()) ;
    if($edit){
        header("location:data_barang.php");
    }else{
       // echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
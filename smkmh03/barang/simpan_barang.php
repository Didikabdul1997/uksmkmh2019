<?php
    include "../bantu/koneksi.php";
    $id_barang   = $_POST['id_barang'];
    $nama_barang   = $_POST['nama_barang'];
    $tgl_pembelian    = $_POST['tgl_pembelian'];
    $jumlah    = $_POST['jumlah'];
    $harga= $_POST['harga'];
    $login = mysqli_query($koneksi,"insert into barang(id_barang,nama_barang,tgl_pembelian,jumlah,harga) values('$id_barang','$nama_barang','$tgl_pembelian','$jumlah','$harga')")or die(mysqli_error());
    if($login){
        header("location:data_barang.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
<?php
    include "../bantu/koneksi.php";
    $tgl_pembelian   = $_POST['tgl_pembelian'];
    $kasir   = $_POST['kasir'];
    $harga    = $_POST['harga'];
    $nama_pembeli = $_POST['nama_pembeli'];
    $login = mysqli_query($koneksi,"insert into transaksi(tgl_pembelian,kasir,harga,nama_pembeli) values('$tgl_pembelian','$kasir','$harga','$nama_pembeli')");
    if($login){
        header("location:data_transaksi.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
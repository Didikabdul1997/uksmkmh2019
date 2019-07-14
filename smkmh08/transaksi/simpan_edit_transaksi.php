<?php
    include "../bantu/koneksi.php";
    $tgl_pembelianawal = $_POST['tgl_pembelianawal'];
    $tgl_pembelian   = $_POST['tgl_pembelian'];
    $kasir   = $_POST['kasir'];
    $harga    = $_POST['harga'];
    $nama_pembeli = $_POST['nama_pembeli'];
    $edit = mysqli_query($koneksi,"update transaksi set tgl_pembelian='$tgl_pembelian', kasir='$kasir', harga='$harga', nama_pembeli='$nama_pembeli' where tgl_pembelian='$tgl_pembelianawal'");
    if($edit){
        header("location:data_transaksi.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
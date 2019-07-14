<?php
    include "../bantu/koneksi.php";
    $tgl_pembeliawal = $_POST['tgl_pembeliawal'];
    $tgl_pembeli   = $_POST['tgl_pembeli'];
    $id_transaksi   = $_POST['id_transaksi'];
    $kasir   = $_POST['kasir'];
    $harga    = $_POST['harga'];
    $edit = mysqli_query($koneksi,"update transaksi set tgl_pembeli='$tgl_pembeli',id_transaksi='$id_transaksi', kasir='$kasir', harga='$harga' where tgl_pembeli='$tgl_pembeliawal'");
    if($edit){
        header("location:data_transaksi.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
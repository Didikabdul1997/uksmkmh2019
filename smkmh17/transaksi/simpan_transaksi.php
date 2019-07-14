<?php
    include "../bantu/koneksi.php";
    $tgl_pembeli   = $_POST['tgl_pembeli'];
    $id_transaksi   = $_POST['id_transaksi'];
    $kasir   = $_POST['kasir'];
    $harga    = $_POST['harga'];
    $login = mysqli_query($koneksi,"insert into transaksi(tgl_pembeli,id_transaksi,kasir,harga) values('$tgl_pembeli','$id_transaksi','$kasir ','$harga')")or die(mysqli_error());
    if($login){
        header("location:data_transaksi.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }
?>
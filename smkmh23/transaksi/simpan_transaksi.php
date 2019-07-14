<?php
    include "../bantu/koneksi.php";
    $tgl_transaksi   = $_POST['tgl_transaksi'];
    $jenis_kontrakan = $_POST['jenis_kontrakan'];
    $lama_menempati = $_POST['lama_menempati'];
    $harga = $_POST['harga'];
    $total = $_POST['total'];
    $query = "insert into transaksi(tgl_transaksi,jenis_kontrakan,lama_menempati,harga,total) values('$tgl_transaksi','$jenis_kontrakan','$lama_menempati','$harga','$total')";
    
    $login = mysqli_query($koneksi,$query)or die(mysqli_error());
    if($login){
        header("location:data_transaksi.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
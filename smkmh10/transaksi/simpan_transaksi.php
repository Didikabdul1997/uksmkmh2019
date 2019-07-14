<?php
    include "../bantu/koneksi.php";
    $id_transaksi   = $_POST['id_transaksi'];
    $Harga = $_POST['harga'];
    $tujuan = $_POST['tujuan'];
    $login = mysqli_query($koneksi,"insert into transaksi(id_transaksi,Harga,tujuan) values('$id_transaksi','$Harga','$tujuan')");
    if($login){
        header("location:data_transaksi.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
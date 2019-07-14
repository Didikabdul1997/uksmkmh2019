<?php
    include "../bantu/koneksi.php";
    $ID_transaksi       = $_POST['ID_transaksi'];
    $No_kamar           = $_POST['No_kamar'];
    $Lama_inap          = $_POST['Lama_inap'];
    $total_harga        = $_POST['total_harga'];
    $login = mysqli_query($koneksi,"insert into transaksi(ID_transaksi,,No_kamar,Lama_inap,total_harga) values('$ID_transaksi','$No_kamar','$Lama_inap','$total_harga')");
    if($login){
        header("location:data_transaksi.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
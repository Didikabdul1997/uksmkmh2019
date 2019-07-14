<?php
    include "../bantu/koneksi.php";
    $jenis_barang   = $_POST['jenis_barang'];
    $jumlah_barang    = $_POST['jumlah_barang'];
    $harga = $_POST['harga'];
    $jumlah = $jumlah_barang*$harga;
    $login = mysqli_query($koneksi,"insert into barang(jenis_barang,jumlah_barang,harga,jumlah) values('$jenis_barang','$jumlah_barang','$harga','$jumlah')")or die (mysql_error());
    if($login){
        header("location:data_Barang.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
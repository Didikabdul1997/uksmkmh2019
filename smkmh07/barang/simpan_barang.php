<?php
    include "../bantu/koneksi.php";
    $Nama_Barang   = $_POST['Nama_Barang'];
    $harga = $_POST['harga'];
    $jumlah_stok = $_POST['jumlah_stok'];
    $login = mysqli_query ($koneksi,"insert into barang(Nama_Barang,harga,jumlah_stok) values('$Nama_Barang','$harga','$jumlah_stok')")or die(mysqli_error());
    if($login){
        header("location:data_barang.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
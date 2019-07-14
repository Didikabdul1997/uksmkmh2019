<?php
    include "../bantu/koneksi.php";
    $Nama_Barang   = $_POST['Nama_Barang'];
    $Stok    = $_POST['Stok'];
    $Harga = $_POST['Harga'];
    $login = mysqli_query($koneksi,"insert into barang(Nama_Barang,Stok,Harga) values('$Nama_Barang','$Stok','$Harga')")or die(mysqli_error());
    if($login){
        header("location:Data_Barang.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
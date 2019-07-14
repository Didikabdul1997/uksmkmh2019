<?php
    include "../bantu/koneksi.php";
    $nama_barang   = $_POST['nama_barang'];
   $stok_barang   = $_POST['stok_barang'];
   $harga   = $_POST['harga'];
    $edit = mysqli_query($koneksi,"insert into barang(nama_barang,stok_barang,harga) values('$nama_barang','$stok_barang','$harga')")or die(mysqli_error());
    if($edit){
        header("location:data_barang.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
<?php
    include "../bantu/koneksi.php";
    $id_barang   = $_POST['id_barang'];
    $nama_barang   = $_POST['nama_barang'];
    $stok_barang   = $_POST['stok_barang'];
    $harga   = $_POST['harga'];
    $edit = mysqli_query($koneksi,"update barang set nama_barang='$nama_barang', stok_barang='$stok_barang', harga='$harga' where id_barang='$id_barang'")or die(mysql_error());
    if($edit){
        header("location:data_barang.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
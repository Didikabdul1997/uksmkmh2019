<?php
    include "../bantu/koneksi.php";
    $ID_Barangawal = $_POST['ID_Barangawal'];
    $ID_Barang   = $_POST['ID_Barang'];
    $Nama_Barang   = $_POST['Nama_Barang'];
    $Stok    = $_POST['Stok'];
    $Harga = $_POST['Harga'];
    $edit = mysqli_query($koneksi,"update barang set ID_Barang='$ID_Barang', Nama_Barang='$Nama_Barang', Stok='$Stok', Harga='$Harga' where ID_Barang='$ID_Barangawal'");
    if($edit){
        header("location:Data_Barang.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
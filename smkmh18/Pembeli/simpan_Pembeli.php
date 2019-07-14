<?php
    include "../bantu/koneksi.php";
    $ID_Pembeli   = $_POST['ID_Pembeli'];
    $Nama_Barang   = $_POST['Nama_Barang'];
    $Harga    = $_POST['Harga'];
    $Jumlah    = $_POST['Jumlah'];
    $login = mysqli_query($koneksi,"insert into pembeli(ID_Pembeli,Nama_Barang,Harga,Jumlah) values('$ID_Pembeli','$Nama_Barang','$Harga','$Jumlah')");
    if($login){
        header("location:Data_pembeli.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
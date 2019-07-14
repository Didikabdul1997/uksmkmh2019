<?php
    include "../bantu/koneksi.php";
    $ID_Pembeliawal = $_POST['ID_Pembeliawal'];
    $ID_Pembeli   = $_POST['ID_Pembeli'];
    $Nama_Barang   = $_POST['Nama_Barang'];
    $Harga    = $_POST['Harga'];
    $Jumlah    = $_POST['Jumlah'];
    $edit = mysqli_query($koneksi,"update pembeli set ID_Pembeli='$ID_Pembeli', Nama_Barang='$Nama_Barang', Harga='$Harga', Jumlah='$Jumlah' where ID_Pembeli='$ID_Pembeliawal'");
    if($edit){
        header("location:Data_pembeli.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
<?php
    include "../bantu/koneksi.php";
    $Kode_Transaksi   = $_POST['Kode_Transaksi'];
    $Tanggal   = $_POST['Tanggal'];
    $Id_Pembeli    = $_POST['Id_Pembeli'];
    $Id_Karyawan = $_POST['Id_Karyawan'];
    $Id_Obat = $_POST['Id_Obat'];
    $Jumlah_Obat = $_POST['Jumlah_Obat'];
    $Total = $_POST['Total'];
    $login = mysqli_query($koneksi,"insert into data_penjualan(Kode_Transaksi,Tanggal,Id_Pembeli,Id_Karyawan,Id_Obat,Jumlah_Obat,Total) values('$Kode_Transaksi','$Tanggal','$Id_Pembeli','$Id_Karyawan','$Id_Obat','$Jumlah_Obat','$Total')")or die(mysqli_error());
    if($login){
        header("location:data_data_penjualan.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
<?php
    include "../bantu/koneksi.php";
    $Kode_Transaksiawal = $_POST['Kode_Transaksiawal'];
    $Kode_Transaksiawal   = $_POST['Kode_Transaksi'];
    $Tanggal   = $_POST['Tanggal'];
    $Id_Pembeli    = $_POST['Id_Pembeli'];
    $Id_Karyawan = $_POST['Id_Karyawan'];
    $Id_Obat = $_POST['Id_Obat'];
    $Jumlah_Obat = $_POST['Jumlah_Obat'];
    $Total = $_POST['Total'];
    $edit = mysqli_query($koneksi,"update data_penjualan set Kode_Transaksi='$Kode_Transaksi', Tanggal='$Tanggal', Id_Pembeli='$Id_Pembeli', Id_Karyawan='$Id_Karyawan', Id_Obat='$Id_Obat', Jumlah_Obat='$Jumlah_Obat', Total='$Total' where Kode_Transaksi='$Kode_Transaksiawal'")or die(mysqli_error());
    if($edit){
        header("location:data_data_penjualan.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
<?php
    include "../bantu/koneksi.php";
    $Id_Pembeli   = $_POST['Id_Pembeli'];
    $Nama   = $_POST['Nama'];
    $Barang_Yang_DiBeli    = $_POST['Barang_Yang_DiBeli'];
    $Jenis_Kelamin = $_POST['Jenis_Kelamin'];
    $login = mysqli_query($koneksi,"insert into pembeli(Id_Pembeli,Nama,Barang_Yang_DiBeli,Jenis_Kelamin) values('$Id_Pembeli','$Nama','$Barang_Yang_DiBeli','$Jenis_Kelamin')");
    if($login){
        header("location:data_pembeli.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
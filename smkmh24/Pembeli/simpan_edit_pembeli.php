<?php
    include "../bantu/koneksi.php";
    $Id_Pembelinawal = $_POST['Id_Pembeliawal'];
    $Id_Pembeli   = $_POST['Id_Pembeli'];
    $Nama   = $_POST['Nama'];
    $Barang_Yang_DiBeli    = $_POST['Barang_Yang_DiBeli'];
    $Jenis_Kelamin = $_POST['Jenis_Kelamin'];
    $edit = mysqli_query($koneksi,"update pembeli set Id_Pembeli='$Id_Pembeli', Nama='$Nama', Barang_Yang_DiBeli='$Barang_Yang_DiBeli', Jenis_Kelamin='$Jenis_Kelamin' where Id_Pembeli='$Id_Pembeliawal'");
    if($edit){
        header("location:data_pembeli.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
<?php
    include "../bantu/koneksi.php";
    $Id_Obat   = $_POST['Id_Obat'];
    $Nama_Obat   = $_POST['Nama_Obat'];
    $Jenis_Obat    = $_POST['Jenis_Obat'];
    $Stock = $_POST['Stock'];
    $Harga = $_POST['Harga'];
    $login = mysqli_query($koneksi,"insert into obat(Id_Obat,Nama_Obat,Jenis_Obat,Stock,Harga) values('$Id_Obat','$Nama_Obat','$Jenis_Obat','$Stock','$Harga')");
    if($login){
        header("location:data_obat.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
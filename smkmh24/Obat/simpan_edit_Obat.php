<?php
    include "../bantu/koneksi.php";
    $Id_Obatawal = $_POST['Id_Obatawal'];
    $Id_Obat   = $_POST['Id_Obat'];
    $Nama_Obat   = $_POST['Nama_Obat'];
    $Jenis_Obat    = $_POST['Jenis_Obat'];
    $Stock = $_POST['Stock'];
    $Harga = $_POST['Harga'];
    $edit = mysqli_query($koneksi,"update obat set Id_Obat='$Id_Obat', Nama_Obat='$Nama_Obat', Jenis_Obat='$Jenis_Obat', Stock='$Stock' , Harga='$Harga' where Id_Obat='$Id_Obatawal'");
    if($edit){
        header("location:data_obat.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
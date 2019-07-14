<?php
    include "../bantu/koneksi.php";
    $NIPawal = $_POST['NIPawal'];
    $NIP   = $_POST['NIP'];
    $Nama   = $_POST['Nama'];
    $TTL    = $_POST['TTL'];
    $Alamat = $_POST['Alamat'];
    $edit = mysqli_query($koneksi,"update guru set NIP='$NIP', Nama='$Nama', TTL='$TTL', Alamat='$Alamat' where NIP='$NIPawal'");
    if($edit){
        header("location:data_guru.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
<?php
    include "../bantu/koneksi.php";
    $id_kontrakanawal = $_POST['id_kontrakanawal'];
    $Jenis_kontrakan  = $_POST['Jenis_kontrakan'];
    $harga            = $_POST['harga'];
    $edit = mysqli_query($koneksi,"update kontrakan set Jenis_kontrakan='$Jenis_kontrakan', harga='$harga', where id_kontrakan='$id_kontrakanawal'");
    if($edit){
        header("location:data_kontrakan.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
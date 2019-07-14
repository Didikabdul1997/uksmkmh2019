<?php
    include "../bantu/koneksi.php";
    $Kode_studioawal = $_POST['Kode_studioawal'];
    $Kode_studio   = $_POST['Kode_studio'];
    $tempat_duduk   = $_POST['tempat_duduk'];
    $edit = mysqli_query($koneksi,"update studio set Kode_studio='$Kode_studio', tempat_duduk='$tempat_duduk'where Kode_studio='$Kode_studioawal'");
    if($edit){
        header("location:data_studio.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
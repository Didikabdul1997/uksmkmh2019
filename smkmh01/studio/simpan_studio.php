<?php
    include "../bantu/koneksi.php";
    $Kode_studio   = $_POST['Kode_studio'];
    $tempat_duduk   = $_POST['tempat_duduk'];
    $login = mysqli_query($koneksi,"insert into studio(Kode_studio,tempat_duduk) values('$Kode_studio','$tempat_duduk')");
    if($login){
        header("location:data_studio.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
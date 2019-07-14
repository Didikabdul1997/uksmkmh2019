<?php
    include "../bantu/koneksi.php";
    $Kode_film   = $_POST['Kode_film'];
    $Kode_studio   = $_POST['Kode_studio'];
    $harga_tiket   = $_POST['harga_tiket'];
    $tayang  = $_POST['tayang'];
    $login = mysqli_query($koneksi,"insert into tiket(Kode_film,Kode_studio,harga_tiket,tayang) values('$Kode_film','$Kode_studio','$harga_tiket','$tayang ')");
    if($login){
        header("location:data_tiket.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
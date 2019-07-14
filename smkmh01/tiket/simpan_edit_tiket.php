<?php
    include "../bantu/koneksi.php";
    $Kode_filmawal = $_POST['Kode_filmawal'];
    $Kode_film   = $_POST['Kode_film'];
    $Kode_studio   = $_POST['Kode_studio'];
    $harga_tiket    = $_POST['harga_tiket'];
    $tayang = $_POST['tayang'];
    $edit = mysqli_query($koneksi,"update tiket set Kode_film='$Kode_film', Kode_studio='$Kode_studio', harga_tiket='$harga_tiket', tayang='$tayang' where Kode_film='$Kode_filmawal'");
    if($edit){
        header("location:data_tiket.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
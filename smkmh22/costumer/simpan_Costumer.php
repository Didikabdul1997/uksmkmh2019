<?php
    include "../bantu/koneksi.php";
    $kode_costumer   = $_POST['kode_costumer'];
    $tgl_beli   = $_POST['tgl_beli'];
    $nama_costumer    = $_POST['nama_costumer'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $login = mysqli_query($koneksi,"insert into costumer(kode_costumer,tgl_beli,nama_costumer,alamat,no_telp) values('$kode_costumer','$tgl_beli','$nama_costumer','$alamat','$no_telp')")or die(mysqli_error());
    if($login){
        header("location:Data_Costumer.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
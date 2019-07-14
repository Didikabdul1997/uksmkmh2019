<?php
    include "../bantu/koneksi.php";
    $kode_costumerawal = $_POST['kode_costumerawal'];
    $kode_costumer   = $_POST['kode_costumer'];
    $tgl_beli   = $_POST['tgl_beli'];
    $nama_costumer   = $_POST['nama_costumer'];
    $alamat    = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $edit = mysqli_query($koneksi,"update costumer set kode_costumer='$kode_costumer', tgl_beli='$tgl_beli', nama_costumer='$nama_costumer', alamat='$alamat', no_telp='$no_telp' where kode_costumer='$kode_costumerawal'")or die(mysqli_error());
    if($edit){
        header("location:Data_Costumer.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
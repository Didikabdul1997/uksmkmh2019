<?php
    include "../bantu/koneksi.php";
    $ID_pelanggan   = $_POST['ID_pelanggan'];
    $nama   = $_POST['nama'];
    $ttl    = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $no_telpon = $_POST['no_telpon'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $login = mysqli_query($koneksi,"insert into pelanggan(ID_pelanggan,nama,ttl,alamat,no_telpon,jenis_kelamin) values('$ID_pelanggan','$nama','$ttl','$alamat','$no_telpon','$jenis_kelamin')");
    if($login){
        header("location:data_pelanggan.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
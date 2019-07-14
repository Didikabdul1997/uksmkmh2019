<?php
    include "../bantu/koneksi.php";
    $ID_pegawai  = $_POST['ID_pegawai'];
    $nama   = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $ttl    = $_POST['ttl'];
    $login = mysqli_query($koneksi,"insert into pegawai (ID_pegawai,nama,alamat,ttl) values('$ID_pegawai','$nama','$alamat','$ttl')");
    if($login){
        header("location:data_pegawai.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
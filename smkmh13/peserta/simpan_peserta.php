<?php
    include "../bantu/koneksi.php";
    $id   = $_POST['id'];
    $nama   = $_POST['nama'];
    $ttl    = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $login = mysqli_query($koneksi,"insert into peserta(id,nama,ttl,alamat) values('$id','$nama','$ttl','$alamat')");
    if($login){
        header("location:data_peserta.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
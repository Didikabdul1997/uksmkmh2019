<?php
    include "../bantu/koneksi.php";
    $idawal = $_POST['idawal'];
    $id   = $_POST['id'];
    $nama   = $_POST['nama'];
    $ttl    = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $edit = mysqli_query($koneksi,"update panitia set id='$id', nama='$nama', ttl='$ttl', alamat='$alamat' where id='$idawal'");
    if($edit){
        header("location:data_panitia.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
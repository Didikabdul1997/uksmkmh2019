<?php
    include "../bantu/koneksi.php";
    $id_penyewa   = $_POST['id_penyewa'];
    $nama   = $_POST['nama'];
    $ttL    = $_POST['ttL'];
    $jenis_kelamin    = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $login = mysqli_query($koneksi,"insert into penyewa(id_penyewa,nama,ttL,jenis_kelamin,alamat) values('$id_penyewa','$nama','$ttL','$jenis_kelamin','$alamat')")or die(mysqli_error());
    if($login){
        header("location:data_penyewa.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
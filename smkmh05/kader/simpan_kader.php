<?php
    include "../bantu/koneksi.php";
    $id_kader   = $_POST['id_kader'];
    $nama   = $_POST['nama'];
    $ttl    = $_POST['ttl'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];
    $login = mysqli_query($koneksi,"insert into kader(id_kader,nama,ttl,alamat,jenis_kelamin,kelas) values('$id_kader','$nama','$ttl','$jenis_kelamin','$kelas','$alamat')");
    if($login){
        header("location:data_kader.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
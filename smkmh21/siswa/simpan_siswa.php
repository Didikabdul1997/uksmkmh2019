<?php
    include "../bantu/koneksi.php";
    $nisn   = $_POST['nisn'];
    $nama   = $_POST['nama'];
    $ttl    = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $login = mysqli_query($koneksi,"insert into siswa(nisn,nama,ttl,alamat) values('$nisn','$nama','$ttl','$alamat')")or die(mysqli_error());
    if($login){
        header("location:data_siswa.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
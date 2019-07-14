<?php
    include "../bantu/koneksi.php";
    $nis   = $_POST['nis'];
    $nama   = $_POST['nama'];
    $ttl    = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $login = mysqli_query($koneksi,"insert into santri(nis,nama,ttl,alamat) values('$nis','$nama','$ttl','$alamat')")or die(mysqli_error());
    if($login){
        header("location:data_santri.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
<?php
    include "../bantu/koneksi.php";
    $nama   = $_POST['nama'];
    $ttl    = $_POST['ttl'];
    $alamat    = $_POST['alamat'];
    $No_tlp = $_POST['No_tlp'];
    $login = mysqli_query($koneksi,"insert into karyawan(nama,ttl,alamat,No_tlp) values('$nama','$ttl','$alamat','$No_tlp')")or die(mysqli_error());
    if($login){
        header("location:data_karyawan.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
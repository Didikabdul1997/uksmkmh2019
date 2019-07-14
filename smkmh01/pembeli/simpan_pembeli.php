<?php
    include "../bantu/koneksi.php";
    $nama_pembeli   = $_POST['nama_pembeli'];
    $alamat   = $_POST['alamat'];
    $no_telepon = $_POST['no_telepon'];
    $login = mysqli_query($koneksi,"insert into pembeli(nama_pembeli,alamat,no_telepon) values('$nama_pembeli','$alamat','$no_telepon')");
    if($login){
        header("location:data_pembeli.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
<?php
    include "../bantu/koneksi.php";
    $Id_staf  = $_POST['Id_staf'];
    $nama_staf    = $_POST['nama_staf'];
    $alamat  = $_POST['alamat'];
    $login = mysqli_query($koneksi,"insert into staf_1(id_staf,nama_staf,alamat) values('$Id_staf','$nama_staf','$alamat')")or die(mysqli_error());
    if($login){
        header("location:data_staf.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
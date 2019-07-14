<?php
    include "../bantu/koneksi.php";
    $nama_sanksi   = $_POST['nama_sanksi'];
    $login = mysqli_query($koneksi,"insert into sanksi(nama_sanksi) values('$nama_sanksi')")or die(mysqli_error());
    if($login){
        header("location:data_sanksi.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
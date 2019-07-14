<?php
    include "../bantu/koneksi.php";
    $Kode_film   = $_POST['Kode_film'];
    $Judul_film  = $_POST['Judul_film'];
    $Jenis_film  = $_POST['Jenis_film'];
    $login = mysqli_query($koneksi,"insert into film(Kode_film,Judul_film,Jenis_film) values('$Kode_film','$Judul_film','$Jenis_film')");
    if($login){
        header("location:tbl_film.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>ss
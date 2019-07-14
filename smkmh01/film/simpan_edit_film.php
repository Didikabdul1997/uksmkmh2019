<?php
    include "../bantu/koneksi.php";
    $Kode_filmawal = $_POST['Kode_filmawal'];
    $Kode_film   = $_POST['Kode_film'];
    $Judul_film   = $_POST['Judul_film'];
    $Jenis_film   = $_POST['Jenis_film'];
    $edit = mysqli_query($koneksi,"update film set Kode_film='$Kode_film', Judul_film='$Judul_film', Jenis_film ='$Jenis_film' where Kode_film='$Kode_filmawal'");
    if($edit){
        header("location:tbl_film.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
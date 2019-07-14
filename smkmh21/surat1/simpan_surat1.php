<?php
    include "../bantu/koneksi.php";
    $id_surat1  = $_POST['id_surat1'];
    $nama   = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $alamat    = $_POST['alamat'];
    $login = mysqli_query($koneksi,"insert into surat1 (id_surat1,nama,tanggal,alamat) values('$id_surat1','$nama','$tanggal','$alamat')");
    if($login){
        header("location:data_surat1.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
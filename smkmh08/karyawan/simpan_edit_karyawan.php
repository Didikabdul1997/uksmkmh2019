<?php
    include "../bantu/koneksi.php";
    $idawal = $_POST['idawal'];
    $id   = $_POST['id'];
    $nama   = $_POST['nama'];
    $alamat    = $_POST['alamat'];
    $kelamin = $_POST['kelamin'];
    $edit = mysqli_query($koneksi,"update karyawan set id='$id', nama='$nama', alamat='$alamat', kelamin='$kelamin' where id='$idawal'");
    if($edit){
        header("location:data_karyawan.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
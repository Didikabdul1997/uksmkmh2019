<?php
    include "../bantu/koneksi.php";
    $id_Pasienawal = $_POST['id_pasienawal'];
    $id_Pasien = $_POST['id_pasien'];
    $Nama   = $_POST['Nama'];
    $Jeniskelamin   = $_POST['Jeniskelamin'];
    $Keluhan    = $_POST['Keluhan'];
    $Alamat = $_POST['Alamat'];
    $no_kamar = $_POST['no_kamar'];
    $nama_kamar = $_POST['nama_kamar'];
    $edit = mysqli_query($koneksi,"update pasien set id_pasien='$id_Pasien', Nama='$Nama', Jeniskelamin='$Jeniskelamin', Keluhan='$Keluhan', Alamat='$Alamat', no_kamar='$no_kamar', nama_kamar='$nama_kamar' where id_pasien='$id_Pasienawal'");
    if($edit){
        header("location:data_pasien.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
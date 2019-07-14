<?php
    include "../bantu/koneksi.php";
    $id_pasien   = $_POST['id_pasien'];
    $Nama   = $_POST['Nama'];
    $Jeniskelamin   = $_POST['Jeniskelamin'];
    $Keluhan = $_POST['Keluhan'];
    $Alamat = $_POST['Alamat'];
    $no_kamar = $_POST['no_kamar'];
    $nama_kamar = $_POST['nama_kamar'];
    $login = mysqli_query($koneksi,"insert into pasien(id_pasien,Nama,Jeniskelamin,Keluhan,Alamat,no_kamar,nama_kamar) values('$id_pasien','$Nama','$Jeniskelamin','$Keluhan','$Alamat','$no_kamar','$nama_kamar')");
    if($login){
        header("location:data_pasien.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
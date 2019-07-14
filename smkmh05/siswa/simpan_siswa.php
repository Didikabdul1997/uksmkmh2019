<?php
    include "../bantu/koneksi.php";
    $nisn   = $_POST['nisn'];
    $nama   = $_POST['nama'];
    $ttl    = $_POST['ttl'];
    $jenis_kelamin    = $_POST['jenis_kelamin'];
    $kelas   = $_POST['kelas'];
    $alamat = $_POST['alamat'];
    $tanggal = $_POST['tanggal'];
    $keluhan = $_POST['keluhan'];
    $obat = $_POST['obat'];
    $resep = $_POST['resep'];
    $login = mysqli_query($koneksi,"insert into siswa(nisn,nama,ttl,jenis_kelamin,kelas,alamat,tanggal,keluhan,obat,resep) values('$nisn','$nama','$ttl','$jenis_kelamin','$kelas','$alamat','$tanggal','$keluhan','$obat','$resep')")or die(mysqli_error());
    if($login){
        header("location:data_siswa.php");
    }else{
        //echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
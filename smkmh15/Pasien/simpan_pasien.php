<?php
    include "../bantu/koneksi.php";
    $kode_pasien  = $_POST['kode_pasien'];
    $nama   = $_POST['nama'];
    $alamat   = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $penyakit = $_POST['penyakit'];
    $login = mysqli_query($koneksi,"insert into Pasien(kode_pasien,nama,alamat,jenis_kelamin,penyakit) 
        values('$kode_pasien','$nama','$alamat','$jenis_kelamin','$penyakit')");
    if($login){
        header("location:data_pasien.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
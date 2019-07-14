<?php
    include "../bantu/koneksi.php";
    $kode_pasienawal = $_POST['kode_pasienawal'];
    $kode_pasien   = $_POST['kode_pasien'];
    $nama  = $_POST['nama'];
    $alamat    = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $penyakit = $_POST['penyakit'];
    $edit = mysqli_query($koneksi,"update pasien set kode_pasien='$kode_pasien',nama='$nama',alamat='$alamat',jenis_kelamin='$jenis_kelamin',penyakit='$penyakit' where kode_pasien='$kode_pasienawal'");
    if($edit){
        header("location:data_pasien.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
<?php
    include "../bantu/koneksi.php";
    $id_surat1awal = $_POST['id_surat1awal'];
    $id_surat1   = $_POST['id_surat1'];
    $nama   = $_POST['nama'];
    $tanggal    = $_POST['tanggal'];
    $alamat = $_POST['alamat'];
    $query = "update pegawai setid_surat1 ='$id_surat1', nama='$nama', tanggal='$tanggal', alamat='$alamat' where id_surat1='$id_surat1awal'";
    $edit = mysqli_query($koneksi,$query);
    if($edit){
        header("location:data_surat1.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
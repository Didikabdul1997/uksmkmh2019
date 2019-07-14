<?php
    include "../bantu/koneksi.php";
    $id_karyawanawal = $_POST['id_karyawanawal'];
    $id_karyawan   = $_POST['id_karyawan'];
    $nama_karyawan   = $_POST['nama_karyawan'];
    $alamat    = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $bagian = $_POST['bagian'];
    $edit = mysqli_query($koneksi,"update karyawan set nama_karyawan='$nama_karyawan', alamat='$alamat', no_telp='$no_telp',bagian='$bagian' where id_karyawan='$id_karyawanawal'")or die(mysqli_error());
    if($edit){
        header("location:Data_Karyawan.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
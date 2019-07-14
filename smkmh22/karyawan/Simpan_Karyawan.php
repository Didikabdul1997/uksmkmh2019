<?php
    include "../bantu/koneksi.php";
    $nama_karyawan   = $_POST['nama_karyawan'];
    $alamat    = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $bagian    = $_POST['bagian'];
    $login = mysqli_query($koneksi,"insert into karyawan(nama_karyawan,alamat,no_telp,bagian) values('$nama_karyawan','$alamat','$no_telp','$bagian')");
    if($login){
        header("location:data_karyawan.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
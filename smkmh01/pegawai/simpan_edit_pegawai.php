<?php
    include "../bantu/koneksi.php";
    $id_pegawaiawal = $_POST['id_pegawaiawal'];
    $id_pegawai   = $_POST['id_pegawai'];
    $nama_pegawai   = $_POST['nama_pegawai'];
    $ttl    = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $edit = mysqli_query($koneksi,"update pegawai set id_pegawai='$id_pegawai', nama_pegawai='$nama_pegawai', ttl='$ttl', alamat='$alamat' where id_pegawai='$id_pegawaiawal'");
    if($edit){
        header("location:data_pegawai.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
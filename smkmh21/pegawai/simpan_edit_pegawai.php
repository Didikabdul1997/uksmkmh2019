<?php
    include "../bantu/koneksi.php";
    $ID_pegawaiawal = $_POST['ID_pegawaiawal'];
    $ID_pegawai   = $_POST['ID_pegawai'];
    $nama   = $_POST['nama'];
    $ttl    = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $query = "update pegawai set ID_pegawai ='$ID_pegawai ', nama='$nama', ttl='$ttl', alamat='$alamat' where ID_pegawai='$ID_pegawaiawal'";
    $edit = mysqli_query($koneksi,$query);
    if($edit){
        header("location:data_pegawai.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
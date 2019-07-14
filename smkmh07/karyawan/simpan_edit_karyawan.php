<?php
    include "../bantu/koneksi.php";
    $id   = $_POST['id'];
    $nama   = $_POST['nama'];
    $ttl    = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $No_tlp = $_POST['No_tlp'];
    $edit = mysqli_query($koneksi,"update karyawan set nama='$nama', ttl='$ttl' ,alamat='$alamat', No_tlp='$No_tlp' where id='$id'");
    if($edit){
        header("location:data_karyawan.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
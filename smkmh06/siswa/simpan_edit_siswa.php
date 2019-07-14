<?php
    include "../bantu/koneksi.php";
    $nisnawal = $_POST['nisnawal'];
    $nisn   = $_POST['nisn'];
    $nama   = $_POST['nama'];
    $ttl    = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $edit = mysqli_query($koneksi,"update siswa set nisn='$nisn', nama='$nama', ttl='$ttl', alamat='$alamat' where nisn='$nisnawal'");
    if($edit){
        header("location:data_siswa.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
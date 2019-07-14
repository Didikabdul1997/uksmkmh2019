<?php
    include "../bantu/koneksi.php";
    $ID_pelangganawal = $_POST['ID_pelangganawal'];
    $ID_pelanggan   = $_POST['ID_pelanggan'];
    $nama   = $_POST['nama'];
    $ttl    = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $no_telpon = $_POST['no_telpon'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $edit = mysqli_query($koneksi,"update pelanggan set ID_pelanggan='$ID_pelanggan', nama='$nama', ttl='$ttl', alamat='$alamat', no_telpon='$no_telpon', jenis_kelamin='$jenis_kelamin' where ID_pelanggan='$ID_pelangganawal'");
    if($edit){
        header("location:data_pelanggan.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
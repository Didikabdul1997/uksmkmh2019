<?php
    include "../bantu/koneksi.php";
    $id_pelangganawal = $_POST['id_pelangganawal'];
    $id_pelanggan   = $_POST['id_pelanggan'];
    $nama_pelanggan   = $_POST['nama_pelanggan'];
    $alamat_pelanggan    = $_POST['alamat_pelanggan'];
    $no_telpon = $_POST['no_telpon'];
    $edit = mysqli_query($koneksi,"update pelangan set id_pelanggan='$id_pelanggan', nama_pelanggan='$nama_pelanggan', alamat_pelanggan='$alamat_pelanggan', no_telpon='$no_telpon' where id_pelanggan='$id_pelangganawal'")or die(mysqli_error());
    if($edit){
        header("location:data_pelanggan.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
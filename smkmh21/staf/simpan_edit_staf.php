<?php
    include "../bantu/koneksi.php";
    $id_stafawal = $_POST['id_stafawal'];
    $id_staf = $_POST['id_staf'];
    $nama_staf  = $_POST['nama_staf'];
    $alamat = $_POST['alamat'];
    $edit = mysqli_query($koneksi,"update staf_1 set id_staf='$id_staf', nama_staf='$nama_staf', alamat='$alamat' where id_staf='$id_stafawal'")or die(mysqli_error());
    if($edit){
        header("location:data_staf.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
<?php
    include "../bantu/koneksi.php";
    $id_sanksi = $_POST['id_sanksi'];
    $nama_sanksi   = $_POST['nama_sanksi'];
    $edit = mysqli_query($koneksi,"update sanksi set nama_sanksi='$nama_sanksi' where id_sanksi='$id_sanksi'")or die(mysqli_error());
    if($edit){
        header("location:data_sanksi.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
<?php
    include "../bantu/koneksi.php";
    $id_pembeliawal = $_POST['id_pembeliawal'];
    $id_pembeli   = $_POST['id_pembeli'];
    $nama_pembeli   = $_POST['nama_pembeli'];
    $jenis_kelamin    = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $edit = mysqli_query($koneksi,"update pembeli set id_pembeli='$id_pembeli', nama_pembeli='$nama_pembeli', jenis_kelamin='$jenis_kelamin', alamat='$alamat' where id_pembeli='$id_pembeliawal'");
    if($edit){
        header("location:data_pembeli.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
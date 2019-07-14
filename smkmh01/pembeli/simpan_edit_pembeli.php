<?php
    include "../bantu/koneksi.php";
    $id_pembeliawal = $_POST['id_pembeliawal'];
    $id_pembeli   = $_POST['id_pembeli'];
    $nama_pembeli   = $_POST['nama_pembeli'];
    $alamat  = $_POST['alamat'];
    $no_telepon = $_POST['no_telepon'];
    $edit = mysqli_query($koneksi,"update pembeli set id_pembeli='$id_pembeli', nama_pembeli='$nama_pembeli', alamat='$alamat', no_telepon='$no_telepon' where id_pembeli='$id_pembeliawal'");
    if($edit){
        header("location:data_pembeli.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
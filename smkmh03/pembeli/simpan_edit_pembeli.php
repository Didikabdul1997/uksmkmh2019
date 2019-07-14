<?php
    include "../bantu/koneksi.php";
    $id_pembeliawal  = $_POST['id_pembeliawal'];
    $id_pembeli   = $_POST['id_pembeli'];
    $nama   = $_POST['nama'];
    $alamat    = $_POST['alamat'];
    $nama_barang    = $_POST['nama_barang'];
    $jumlah = $_POST['jumlah'];
    $edit = mysqli_query($koneksi,"update pembeli set nama='$nama', alamat='$alamat', nama_barang='$nama_barang',   jumlah='$jumlah' where id_pembeli='$id_pembeliawal'")or die(mysqli_error());
    if($edit){
        header("location:data_pembeli.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
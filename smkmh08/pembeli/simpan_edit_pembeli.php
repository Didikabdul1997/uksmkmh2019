<?php
    include "../bantu/koneksi.php";
    $idawal = $_POST['idawal'];
    $id   = $_POST['id'];
    $nama   = $_POST['nama'];
    $alamat    = $_POST['alamat'];
    $barang = $_POST['barang'];
    $jumlah_barang = $_POST['jumlah_barang'];
    $harga = $_POST['harga'];
    $total = $_POST['total'];
    $edit = mysqli_query($koneksi,"update pembeli set id='$id', nama_pembeli='$nama', alamat='$alamat', barang='$barang', jumlah_barang='$jumlah_barang', harga='$harga', total='$total' where id='$idawal'")or die (mysqli_error());
    if($edit){
        header("location:data_pembeli.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }
?>
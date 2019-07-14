<?php
    include "../bantu/koneksi.php";
    $id  = $_POST['id'];
    $nama   = $_POST['nama_pembeli'];
    $alamat    = $_POST['alamat'];
    $barang = $_POST['barang'];
    $jumlah_barang = $_POST['jumlah_barang '];
    $harga = $_POST['harga'];
    $total = $_POST['total'];
    $login = mysqli_query($koneksi,"insert into pembeli(id,nama_pembeli,alamat,barang,jumlah_total,harga,total) values('$id','$nama','$alamat','$barang','$jumlah_barang','$harga','$total')")or die (mysqli_error());
    if($login){
        header("location:data_pembeli.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
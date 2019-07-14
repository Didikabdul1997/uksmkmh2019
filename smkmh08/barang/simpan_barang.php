<?php
    include "../bantu/koneksi.php";
    $nama   = $_POST['nama'];
    $harga    = $_POST['harga'];
    $tgl_pembelian = $_POST['tgl_pembelian'];
     $tgl_pembelian = $_POST['jumlah_stok'];
    $login = mysqli_query($koneksi,"insert into barang(nama,harga,tgl_pembelian,jumlah_stok) values('$nama','$harga','$tgl_pembelian','sumlah_stok')")or die (mysqli_error());
    if($login){
        header("location:data_barang.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
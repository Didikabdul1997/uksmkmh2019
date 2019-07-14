<?php
    include "../bantu/koneksi.php";
    $id_transaksi = $_POST['id_transaksi'];
    $tanggal_transaksi   = $_POST['tanggal_transaksi'];
    $kasir   = $_POST['kasir'];
    $pembeli    = $_POST['pembeli'];
    $barang= $_POST['barang'];
    $edit = mysqli_query($koneksi,"update transaksi set tanggal_transaksi='$tanggal_transaksi', kasir='$kasir', pembeli='$pembeli', barang='$barang' where id_transaksi='$id_transaksi'")or die(mysql_error());
    if($edit){
        header("location:data_transaksi.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
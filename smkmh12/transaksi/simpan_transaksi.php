<?php
    include "../bantu/koneksi.php";
    $tanggal_transaksi   = $_POST['tanggal_transaksi'];
    $kasir    = $_POST['kasir'];
    $pembeli = $_POST['pembeli'];
     $id_barang = $_POST['id_barang'];
    $login = mysqli_query($koneksi,"insert into transaksi(tanggal_transaksi,kasir,pembeli,barang) values('$tanggal_transaksi','$kasir','$pembeli','$id_barang')");
    if($login){
        $stok_barang = "";
        $barg = mysqli_query($koneksi,"select * from barang where id_barang='$id_barang'");
        foreach ($barg as $b){
            $stok_barang = $b['stok_barang'];
            $stok_barang = $stok_barang-1;
        }
        $qupdatebarang = "update barang set stok_barang='$stok_barang' where id_barang='$id_barang'";
        $updatebarang = mysqli_query($koneksi,$qupdatebarang);
        echo $qupdatebarang;
        if($updatebarang){
            header("location:data_transaksi.php");
        }else{
            echo "<script>alert('Gagal di Simpan Stok!!');history.go(-1);</script>";
        }
        
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
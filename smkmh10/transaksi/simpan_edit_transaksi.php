<?php
    include "../bantu/koneksi.php";
    $id_transaksiawal = $_POST['id_transaksiawal'];
    $id_transaksi   = $_POST['id_transaksi'];
    $Harga = $_POST['Harga'];
    $tujuan = $_POST['tujuan'];
    $edit = mysqli_query($koneksi,"update transaksi set id_transaksi='$id_transaksi', Harga='$Harga', tujuan='$tujuan' where id_transaksi='$id_transaksiawal'")or die(mysqli_error());
    if($edit){
        header("location:data_transaksi.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
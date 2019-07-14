<?php
    include "../bantu/koneksi.php";
    $ID_transaksiawal  = $_POST['ID_transaksiawal'];
    $ID_transaksi      = $_POST['ID_transaksi'];
    $No_kamar          = $_POST['No_kamar'];
    $Lama_inap         = $_POST['Lama_inap'];
    $total_harga       = $_POST['total_harga'];
    $edit = mysqli_query($koneksi,"update transaksi set ID_transaksi='$ID_transaksi', No_kamar='$No_kamar', Lama_inap='$Lama_inap', total_harga='$total_harga' where ID_transaksi='$ID_transaksiawal'");
    if($edit){
        header("location:data_transaksi.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
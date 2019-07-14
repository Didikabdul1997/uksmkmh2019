<?php
    include "../bantu/koneksi.php";
    $ID_transaksiawal = $_POST['ID_transaksiawal'];
    $tgl_transaksi   = $_POST['tgl_transaksi'];
    $jenis_kontrakan   = $_POST['jenis_kontrakan'];
    $lama_menempati  = $_POST['lama_menempati'];
    $harga   = $_POST['harga'];
    $total   = $_POST['total'];
    $query = "update transaksi set tgl_transaksi='$tgl_transaksi', jenis_kontrakan='$jenis_kontrakan', lama_menempati='$lama_menempati', harga='$harga', total='$total' where ID_transaksi='$ID_transaksiawal'";
    echo $query;
    $edit = mysqli_query($koneksi,$query)or die(mysqli_error());
    if($edit){
        header("location:data_transaksi.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
<?php
    include "../bantu/koneksi.php";
    $ID_pesan   = $_POST['ID_pesan'];
    $ID_pelanggan   = $_POST['ID_pelanggan'];
    $tgl_sewa = $_POST['tgl_sewa'];
    $tgl_pengembalian = $_POST['tgl_pengembalian'];
    $lama_pinjam = $_POST['lama_pinjam'];
    $biaya_sewa = $lama_pinjam*50000;
    $edit = mysqli_query($koneksi,"update pesan set ID_pelanggan='$ID_pelanggan', tgl_sewa='$tgl_sewa',tgl_pengembalian='$tgl_pengembalian',lama_pinjam='$lama_pinjam',biaya_sewa='$biaya_sewa' where ID_pesan='$ID_pesan'");
    if($edit){
        header("location:data_pesan.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    

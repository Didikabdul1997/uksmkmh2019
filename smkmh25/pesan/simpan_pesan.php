<?php
    include "../bantu/koneksi.php";
    $ID_pelanggan   = $_POST['ID_pelanggan'];
    $tgl_sewa = $_POST['tgl_sewa'];
    $tgl_pengembalian = $_POST['tgl_pengembalian'];
    $lama_pinjam = $_POST['lama_pinjam'];
    $biaya_sewa = $lama_pinjam*50000;
    $login = mysqli_query($koneksi,"insert into pesan(ID_pelanggan,tgl_sewa,tgl_pengembalian,lama_pinjam,biaya_sewa) values('$ID_pelanggan','$tgl_sewa','$tgl_pengembalian','$lama_pinjam','$biaya_sewa')")or die(mysqli_error());
    if($login){
        header("location:data_pesan.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
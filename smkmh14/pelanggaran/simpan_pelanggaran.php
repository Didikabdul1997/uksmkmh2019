<?php
    include "../bantu/koneksi.php";
    $nis   = $_POST['nis'];
    $nama_pelanggaran   = $_POST['nama_pelanggaran'];
    $tgl_pelanggaran    = $_POST['tgl_pelanggaran'];
    $jam_pelanggaran = $_POST['jam_pelanggaran'];
    $id_sanksi = $_POST['id_sanksi'];
    $query = "insert into pelanggaran(nis,nama_pelanggaran,tgl_pelanggaran,jam_pelanggaran,id_sanksi) values('$nis','$nama_pelanggaran','$tgl_pelanggaran','$jam_pelanggaran','$id_sanksi')";
    echo $query;
    $login = mysqli_query($koneksi,$query);
    if($login){
        header("location:data_pelanggaran.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
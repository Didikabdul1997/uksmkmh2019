<?php
    include "../bantu/koneksi.php";
    $id_pelanggaran = $_POST['id_pelanggaran'];
    $nis   = $_POST['nis'];
    $nama_pelanggaran   = $_POST['nama_pelanggaran'];
    $tgl_pelanggaran   = $_POST['tgl_pelanggaran'];
    $jam_pelanggaran    = $_POST['jam_pelanggaran'];
    $id_sanksi = $_POST['id_sanksi'];
    $edit = mysqli_query($koneksi,"update pelanggaran set nis='$nis', nama_pelanggaran='$nama_pelanggaran', tgl_pelanggaran='$tgl_pelanggaran', jam_pelanggaran='$jam_pelanggaran', id_sanksi='$id_sanksi' where id_pelanggaran='$id_pelanggaran'")or die(mysqli_error());
    if($edit){
        header("location:data_pelanggaran.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
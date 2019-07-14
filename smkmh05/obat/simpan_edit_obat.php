<?php
    include "../bantu/koneksi.php";
    $id_obatawal = $_POST['id_obatawal'];
    $id_obat  = $_POST['id_obat'];
    $nama_obat  = $_POST['nama_obat'];
    $indikasi  = $_POST['indikasi'];
    $resep  = $_POST['resep'];
    $stok  = $_POST['stok'];
    $edit = mysqli_query($koneksi,"update obat set id_obat='$id_obat', nama_obat='$nama_obat', indikasi='$indikasi', resep='$resep', stok='$stok' where id_obat='$id_obatawal'");
    if($edit){
        header("location:data_obat.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
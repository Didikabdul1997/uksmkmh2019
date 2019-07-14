<?php
    include "../bantu/koneksi.php";
    $id_obat   = $_POST['id_obat'];
    $nama_obat   = $_POST['nama_obat'];
    $indikasi   = $_POST['indikasi'];
    $resep   = $_POST['resep'];
    $stok   = $_POST['stok'];
    $login = mysqli_query($koneksi,"insert into obat(id_obat,nama_obat,indikasi,resep,stok) values('$id_obat','$nama_obat','$indikasi','$resep','$stok')");
    if($login){
        header("location:data_obat.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
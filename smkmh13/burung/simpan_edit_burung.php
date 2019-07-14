<?php
    include "../bantu/koneksi.php";
    $idawal = $_POST['idawal'];
    $id   = $_POST['id'];
    $nama_pmlk   = $_POST['nama_pmlk'];
    $jns    = $_POST['jns'];
    $nama_brg = $_POST['nama_brg'];
    $harga  = $_POST['harga'];
    $telp  = $_POST['telp'];
    $edit = mysqli_query($koneksi,"update burung set id='$id', nama_pmlk='$nama_pmlk', jns='$jns', nama_brg='$nama_brg', harga='$harga', telp='$telp'  where id='$idawal'");
    if($edit){
        header("location:data_burung.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
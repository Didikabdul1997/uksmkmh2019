<?php
    include "../bantu/koneksi.php";
    $id   = $_POST['id'];
    $nama_pmlk   = $_POST['nama_pmlk'];
    $jns    = $_POST['jns'];
    $nama_brg = $_POST['nama_brg'];
    $harga  = $_POST['harga'];
    $telp  = $_POST['telp'];
    $login = mysqli_query($koneksi,"insert into burung(id,nama_pmlk,jns,nama_brg,harga,telp) values('$id','$nama_pmlk','$jns','$nama_brg','$harga','$telp')");
    if($login){
        header("location:data_burung.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
<?php
    include "../bantu/koneksi.php";
    $id_pesan   = $_POST['id_pesan'];
    $pelanggan   = $_POST['pelanggan'];
    $makanan    = $_POST['makanan'];
    $query = "insert into pesan(id_pesan,pelanggan,makanan)values('$id_pesan','$pelanggan','$makanan')";
    echo $query;
    $login = mysqli_query($koneksi,$query)or die(mysqli_error());
    if($login){
        header("location:data_pesan.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
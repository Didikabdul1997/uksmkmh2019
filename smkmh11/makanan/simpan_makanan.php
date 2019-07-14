<?php
    include "../bantu/koneksi.php";
    $id_makanan = $_POST['id_makanan'];
    $nama = $_POST['nama'];
    $harga_makanan = $_POST['harga_makanan'];
    $query = "insert into makanan(id_makanan,nama,harga_makanan) values('$id_makanan','$nama','$harga_makanan')";
    $login = mysqli_query($koneksi,$query)or die(mysqli_error());
    if($login){
     header("location:data_makanan.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
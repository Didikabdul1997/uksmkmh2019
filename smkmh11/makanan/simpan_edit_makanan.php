<?php
    include "../bantu/koneksi.php";
    $id_makananawal = $_POST['id_makananawal'];
    $id_makanan = $_POST['id_makanan'];
    $nama = $_POST['nama'];
    $harga_makanan = $_POST['harga_makanan'];
    $query = "update makanan set id_makanan='$id_makanan',nama='$nama',harga_makanan='$harga_makanan' where id_makanan='$id_makananawal'";
    echo $query;
    $edit = mysqli_query($koneksi,$query)or die(mysqli_error());
    if($edit){
        header("location:data_makanan.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
<?php
    include "../bantu/koneksi.php";
    $id_pelanggan = $_POST['id_pelanggan'];
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $alamat_pelanggan = $_POST['alamat_pelanggan'];
    $no_telpon = $_POST['no_telp'];
    $query = "insert into pelangan(id_pelanggan,nama_pelanggan,alamat_pelanggan,no_telpon) values('$id_pelanggan','$nama_pelanggan','$alamat_pelanggan','$no_telpon')";
    echo $query;
    $login = mysqli_query($koneksi,$query)or die(mysqli_error());
    if($login){
        header("location:data_pelanggan.php");
    }else{
        echo $query;
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>

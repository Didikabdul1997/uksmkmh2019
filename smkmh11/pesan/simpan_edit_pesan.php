<?php
    include "../bantu/koneksi.php";
    $id_pesanawal = $_POST['id_pesanawal'];
    $id_pesan   = $_POST['id_pesan'];
    $pelanggan   = $_POST['pelanggan'];
    $makanan = $_POST['makanan'];
    $edit = mysqli_query($koneksi,"update pesan set id_pesan='$id_pesan', pelanggan='$pelanggan', makanan='$makanan' where id_pesan='$id_pesanawal'")or die (mysqli_error());
    if($edit){
        header("location:data_pesan.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
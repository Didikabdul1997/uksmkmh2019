<?php
    include "../bantu/koneksi.php";
    $id_obat   = $_POST['id_obat'];
    $Nama_Obat   = $_POST['Nama_Obat'];
    $Kegunaan    = $_POST['Kegunaan'];
    $jumlah_stok = $_POST['jumlah_stok'];
    $login = mysqli_query($koneksi,"insert into obat(id_obat,Nama_Obat,Kegunaan,jumlah_stok) values('$id_obat','$Nama_Obat','$Kegunaan','$jumlah_stok')")or die(mysqli_error());
    if($login){
        header("location:data_Obat.php");
    }else{
        //echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
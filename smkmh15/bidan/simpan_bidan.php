<?php
    include "../bantu/koneksi.php";
    $ID_Bidan   = $_POST['ID_Bidan'];
    $Nama   = $_POST['Nama'];
    $Alamat = $_POST['Alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $spesialis = $_POST['spesialis'];

    $login = mysqli_query($koneksi,"insert into Bidan(ID_Bidan,Nama,Alamat,jenis_kelamin,spesialis) values('$ID_Bidan','$Nama','$Alamat','$jenis_kelamin','$spesialis')");
    if($login){
        header("location:data_bidan.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
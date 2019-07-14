<?php
    include "../bantu/koneksi.php";
    $ID_pengunjung        = $_POST['ID_pengunjung'];
    $Nama_pengunjung      = $_POST['Nama_pengunjung'];
    $Alamat_pengunjung    = $_POST['Alamat_pengunjung'];
    $No_telp              = $_POST['No_telp'];
    $No_ktp               = $_POST['No_ktp'];
    $login = mysqli_query($koneksi,"insert into pengunjung(ID_pengunjung,Nama_pengunjung,Alamat_pengunjung,No_telp,No_ktp) values('$ID_pengunjung','$Nama_pengunjung','$Alamat_pengunjung','$No_telp','$No_ktp')");
    if($login){
        header("location:data_pengunjung.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
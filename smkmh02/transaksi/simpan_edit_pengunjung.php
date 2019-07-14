<?php
    include "../bantu/koneksi.php";
    $ID_pengunjungawal = $_POST['ID_pengunjungawal'];
    $ID_pengunjung     = $_POST['ID_pengunjung'];
    $Nama_pengunjung   = $_POST['Nama_pengunjung'];
    $Alamat_pengunjung = $_POST['Alamat_pengunjung'];
    $No_telp           = $_POST['No_telp'];
    $No_ktp            = $_POST['No_ktp'];
    $edit = mysqli_query($koneksi,"update pengunjung set ID_pengunjung='$ID_pengunjung', Nama_pengunjung='$Nama_pengunjung', No_telp='$No_telp', No_ktp='$No_ktp', Alamat_pengunjung='$Alamat_pengunjung' where ID_pengunjung='$ID_pengunjungawal'");
    if($edit){
        header("location:data_pengunjung.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
<?php
    include "../bantu/koneksi.php";
    $ID_petugasawal     = $_POST['ID_petugasawal'];
    $ID_petugas         = $_POST['ID_petugas'];
    $Nama_petugas       = $_POST['Nama_petugas'];
    $Jabatan_petugas    = $_POST['Jabatan_petugas'];
    $edit = mysqli_query($koneksi,"update petugas set ID_petugas='$ID_petugas', Nama_petugas='$Nama_petugas', Jabatan_petugas='$Jabatan_petugas' where ID_petugas='$ID_petugasawal'");
    if($edit){
        header("location:data_petugas.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
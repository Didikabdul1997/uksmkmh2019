<?php
    include "../bantu/koneksi.php";
    $Nama   = $_POST['Nama'];
    $Alamat    = $_POST['Alamat'];
    $Tujuan = $_POST['Tujuan'];
    $login = mysqli_query($koneksi,"insert into penumpang(Nama,Alamat,Tujuan) values('$Nama','$Alamat','$Tujuan')");
    if($login){
        header("location:data_penumpang.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
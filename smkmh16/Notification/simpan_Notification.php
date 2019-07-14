<?php
    include "../bantu/koneksi.php";
    $perihal    = $_POST['perihal'];
    $tanggal = $_POST['tanggal'];
    $penerima = $_POST['penerima'];
    $login = mysqli_query($koneksi,"insert into Notification(perihal,tanggal,penerima) values('$perihal','$tanggal','$penerima')")or die(mysqli_error());
    if($login){
        header("location:data_Notification.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
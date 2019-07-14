<?php
    include "../bantu/koneksi.php";
    $Jenis_kontrakan = $_POST['Jenis_kontrakan'];
    $harga  = $_POST['harga'];
    $login = mysqli_query($koneksi,"insert into kontrakan(Jenis_kontrakan,harga) values('$Jenis_kontrakan','$harga')")or die(mysqli_error());
    if($login){
        header("location:data_kontrakan.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>

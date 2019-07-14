<?php
    include "../bantu/koneksi.php";
    $ID_Customer    = $_POST['ID_Customer'];
    $Nama           = $_POST['Nama'];
    $Alamat         = $_POST['Alamat'];
    $Jenis_Kelamin  = $_POST['Jenis_Kelamin'];
    $login = mysqli_query($koneksi,"insert into Customer(ID_Customer,Nama,Alamat,Jenis_Kelamin) values('$ID_Customer','$Nama','$Alamat','$Jenis_Kelamin')")or die(mysqli_error());
    if($login){
        header("location:data_Customer.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
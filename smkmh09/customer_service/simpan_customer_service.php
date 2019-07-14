<?php
    include "../bantu/koneksi.php";
    $ID_customer_service    = $_POST['ID_customer_service'];
    $Nama           = $_POST['Nama'];
    $Alamat         = $_POST['Alamat'];
    $Jenis_Kelamin  = $_POST['Jenis_Kelamin'];
    $login = mysqli_query($koneksi,"insert into customer_service(ID_customer_service,Nama,Alamat,Jenis_Kelamin) values('$ID_customer_service','$Nama','$Alamat','$Jenis_Kelamin')")or die(mysqli_error());
    if($login){
        header("location:data_customer_service.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
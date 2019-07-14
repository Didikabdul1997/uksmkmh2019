<?php
    include "../bantu/koneksi.php";
    $ID_customer_serviceawal = $_POST['ID_customer_serviceawal'];
    $ID_customer_service     = $_POST['ID_customer_service'];
    $Nama            = $_POST['Nama'];
    $Alamat          = $_POST['Alamat'];
    $Jenis_Kelamin   = $_POST['Jenis_Kelamin'];
    $edit = mysqli_query($koneksi,"update customer_service set ID_customer_service='$ID_customer_service', Nama='$Nama', Alamat='$Alamat', Jenis_Kelamin='$Jenis_Kelamin' where ID_customer_service='$ID_customer_serviceawal'")or die(mysqli_error());
    if($edit){
        header("location:data_customer_service.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
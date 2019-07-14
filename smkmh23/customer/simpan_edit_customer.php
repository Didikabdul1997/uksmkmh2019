<?php
    include "../bantu/koneksi.php";
    $ID_customerawal = $_POST['ID_customerawal'];
    $Nama_Lengkap   = $_POST['Nama_Lengkap'];
    $TTL    = $_POST['TTL'];
    $Alamat = $_POST['Alamat'];
    $edit = mysqli_query($koneksi,"update customer set  Nama_Lengkap='$Nama_Lengkap', TTL='$TTL', Alamat='$Alamat' where ID_customer='$ID_customerawal'");
    if($edit){
        header("location:data_customer.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>

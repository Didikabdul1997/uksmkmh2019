<?php
    include "../bantu/koneksi.php";
    $ID_Customerawal = $_POST['ID_Customerawal'];
    $ID_Customer     = $_POST['ID_Customer'];
    $Nama            = $_POST['Nama'];
    $Alamat          = $_POST['Alamat'];
    $Jenis_Kelamin   = $_POST['Jenis_Kelamin'];
    $edit = mysqli_query($koneksi,"update customer set ID_Customer='$ID_Customer', Nama='$Nama', Alamat='$Alamat', Jenis_Kelamin='$Jenis_Kelamin' where ID_Customer='$ID_Customerawal'")or die(mysqli_error());
    if($edit){
        header("location:data_Customer.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
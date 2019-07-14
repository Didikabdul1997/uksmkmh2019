<?php
    include "../bantu/koneksi.php";
    $id_Project_awal = $_POST['id_Project_awal'];
    $id_Project = $_POST['id_Project'];
    $name   = $_POST['name'];
    $information   = $_POST['information'];
    $from_date    = $_POST['from_date'];
    $to_date = $_POST['to_date'];
    $edit = mysqli_query($koneksi,"update Project set id_Project='$id_Project', name='$name', information='$information', from_date='$from_date', to_date='$to_date' where id_Project='$id_Project_awal'")or die(mysqli_error());
    if($edit){
        header("location:data_Project.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
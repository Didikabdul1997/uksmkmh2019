<?php
    include "../bantu/koneksi.php";
    $name   = $_POST['name'];
    $information   = $_POST['information'];
    $from_date    = $_POST['from_date'];
    $to_date = $_POST['to_date'];
    $login = mysqli_query($koneksi,"insert into Project(name,information,from_date, to_date) values('$name','$information','$from_date','$to_date')")or die(mysqli_error());
    if($login){
        header("location:data_project.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
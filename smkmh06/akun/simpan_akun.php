<?php
    include "../bantu/koneksi.php";
    $id_user    = $_POST['id_user'];
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    $rpassword    = $_POST['rpassword'];
    $nama = $_POST['nama'];
    if($password==$rpassword){
        $edit = mysqli_query($koneksi,"update user set username='$username', password='$password', nama='$nama' where id_user='$id_user'");
        if($edit){
            header("location:../bantu/home.php");
        }else{
            echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
        } 
    }else{
        echo "<script>alert('Password Tidak Sama!!');history.go(-1);</script>";
    }
       
?>
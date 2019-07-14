<?php
    include "../bantu/koneksi.php";
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $login = mysqli_query($koneksi,"select * from user where username='$user' and password='$pass'");
    $cek = mysqli_num_rows($login);
    if($cek > 0){
        foreach ($login as $row){
            session_start();
            $_SESSION['username'] = $user;
            $_SESSION['status'] = "loged";
            $_SESSION['id_user']   = $row['id_user'];
            $_SESSION['nama']   = $row['nama'];
            header("location:../bantu/home.php");
        }
        
    }else{
        header("location:login.php");
    }
?>
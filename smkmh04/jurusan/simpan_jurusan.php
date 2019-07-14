<?php
    include "../bantu/koneksi.php";
    $CODE_JUR      = $_POST['CODE_JUR'];
    $NAMAJURUSAN   = $_POST['NAMAJURUSAN'];
    $login = mysqli_query($koneksi,"insert into jurusan(CODE_JUR,NAMAJURUSAN) values('$CODE_JUR','$NAMAJURUSAN')");
    if($login){
        header("location:data_jurusan.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
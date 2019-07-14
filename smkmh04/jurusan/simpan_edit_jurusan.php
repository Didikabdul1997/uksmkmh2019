<?php
    include "../bantu/koneksi.php";
    $CODE_JURawal = $_POST['CODE_JURawal'];
    $CODE_JUR   = $_POST['CODE_JUR'];
    $NAMAJURUSAN   = $_POST['NAMAJURUSAN'];
    $edit = mysqli_query($koneksi,"update jurusan set CODE_JUR='$CODE_JUR', NAMAJURUSAN='$NAMAJURUSAN' where CODE_JUR='$CODE_JURawal'");
    if($edit){
        header("location:data_jurusan.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
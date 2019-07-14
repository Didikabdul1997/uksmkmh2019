<?php
    include "../bantu/koneksi.php";
    $perihal    = $_POST['perihal'];
    $tanggal = $_POST['tanggal'];
    $pengirim = $_POST['pengirim'];
    $login = mysqli_query($koneksi,"insert into Surat (perihal,tanggal,pengirim) values('$perihal','$tanggal','$pengirim')");
    if($login){
        header("location:data_Surat.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
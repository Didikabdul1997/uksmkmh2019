<?php
    include "../bantu/koneksi.php";
    $id_surat   = $_POST['id_surat'];
    $perihal   = $_POST['perihal'];
    $tanggal    = $_POST['tanggal'];
    $pengirim = $_POST['pengirim'];
    
    $edit = mysqli_query($koneksi,"update Surat set id_surat ='$id_surat ', perihal='$perihal', tanggal='$tanggal', pengirim='$pengirim' where id_surat ='$id_surat awal'");
    if($edit){
        header("location:data_Surat.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
<?php
    include "../bantu/koneksi.php";
    $id_penumpangawal = $_POST['id_penumpangawal'];
    $id_penumpang  = $_POST['id_penumpang'];
    $Nama   = $_POST['Nama'];
    $Alamat    = $_POST['Alamat'];
    $Tujuan = $_POST['Tujuan'];
    $edit = mysqli_query($koneksi,"update penumpang set id_penumpang='$id_penumpang', Nama='$Nama', Alamat='$Alamat', Tujuan='$Tujuan' where id_penumpang='$id_penumpangawal'")or die(mysqli_error());
    if($edit){
        header("location:data_penumpang.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
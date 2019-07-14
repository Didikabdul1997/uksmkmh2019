<?php
    include "../bantu/koneksi.php";
    $ID_MAPELawal = $_POST['ID_MAPELawal'];
    $ID_MAPEL   = $_POST['ID_MAPEL'];
    $NAMAMAPEL   = $_POST['NAMAMAPEL'];
    $edit = mysqli_query($koneksi,"update mapel set ID_MAPEL='$ID_MAPEL', NAMAMAPEL='$NAMAMAPEL' where ID_MAPEL='$ID_MAPELawal'");
    if($edit){
        header("location:data_mapel.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
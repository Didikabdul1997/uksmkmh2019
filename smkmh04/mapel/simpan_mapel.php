<?php
    include "../bantu/koneksi.php";
    $ID_MAPEL      = $_POST['ID_MAPEL'];
    $NAMAMAPEL   = $_POST['NAMAMAPEL'];
    $login = mysqli_query($koneksi,"insert into mapel(ID_MAPEL,NAMAMAPEL) values('$ID_MAPEL','$NAMAMAPEL')");
    if($login){
        header("location:data_mapel.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
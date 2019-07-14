<?php
    include "../bantu/koneksi.php";
    $id_jadwal   = $_POST['id_jadwal'];
    $senin   = $_POST['senin'];
    $selasa    = $_POST['selasa'];
    $rabu = $_POST['rabu'];
    $kamis = $_POST['kamis'];
    $jumat = $_POST['jumat'];
    $sabtu = $_POST['sabtu'];
    $login = mysqli_query($koneksi,"insert into jadwal(id_jadwal,senin,selasa,rabu,kamis,jumat,sabtu) values('$id_jadwal','$senin','$selasa','$rabu','$kamis','$jumat','$sabtu')");
    if($login){
        header("location:data_jadwal.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
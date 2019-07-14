<?php
    include "../bantu/koneksi.php";
    $id_jadwalawal = $_POST['id_jadwalawal'];
    $id_jadwal   = $_POST['id_jadwal'];
    $senin   = $_POST['senin'];
    $selasa    = $_POST['selasa'];
    $rabu = $_POST['rabu'];
    $kamis = $_POST['kamis'];
    $jumat = $_POST['jumat'];
    $sabtu = $_POST['sabtu'];
    $edit = mysqli_query($koneksi,"update jadwal set id_jadwal='$id_jadwal', senin='$senin', selasa='$selasa', rabu='$rabu',kamis='$kamis', jumat='$jumat',sabtu='$sabtu' where id_jadwal='$id_jadwalawal'");
    if($edit){
        header("location:data_jadwal.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
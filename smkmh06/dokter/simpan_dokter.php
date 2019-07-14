<?php
    include "../bantu/koneksi.php";
    $id_dokter   = $_POST['id_dokter'];
    $Nama   = $_POST['Nama'];
    $Keahlian    = $_POST['Keahlian'];
    $Alamat = $_POST['Alamat'];
    $jam_kerja = $_POST['jam_kerja'];
    $login = mysqli_query($koneksi,"insert into dokter(id_dokter,Nama,Keahlian,Alamat,jam_kerja) values('$id_dokter','$Nama','$Keahlian','$Alamat','$jam_kerja')")or die(mysqli_error());
    if($login){
        header("location:data_dokter.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
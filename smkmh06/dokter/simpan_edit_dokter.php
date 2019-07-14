<?php
    include "../bantu/koneksi.php";
    $id_dokterawal = $_POST['id_dokterawal'];
    $id_dokter = $_POST['id_dokter'];
    $Nama   = $_POST['Nama'];
    $Keahlian   = $_POST['Keahlian'];
    $Alamat = $_POST['Alamat'];
    $jam_kerja = $_POST['jam_kerja'];
    $edit = mysqli_query($koneksi,"update dokter set id_dokter='$id_dokter', Nama='$Nama', Keahlian='$Keahlian', Alamat='$Alamat', jam_kerja='$jam_kerja' where id_dokter='$id_dokterawal'");
    if($edit){
        header("location:data_dokter.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
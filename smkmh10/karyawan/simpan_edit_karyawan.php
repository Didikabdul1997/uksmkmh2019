<?php
    include "../bantu/koneksi.php";
    $id_karawal = $_POST['id_karawal'];
    $id_kar     = $_POST['id_kar'];
    $Nama       = $_POST['Nama'];
    $Alamat     = $_POST['Alamat'];
    $Ttl        = $_POST['Ttl'];
    $No_hp        = $_POST['No_hp'];
    $No_ktp        = $_POST['No_ktp'];
    $No_kartu_keluarga        = $_POST['No_kartu_keluarga'];
    $edit = mysqli_query($koneksi,"update karyawan set id_kar='$id_kar', Nama='$Nama', Alamat='$Alamat', Ttl='$Ttl', No_hp='$No_hp', No_ktp='$No_ktp', No_kartu_keluarga='$No_kartu_keluarga' where id_kar='$id_karawal'")or die(mysqli_error());
    if($edit){
        header("location:data_karyawan.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
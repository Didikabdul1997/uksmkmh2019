<?php
    include "../bantu/koneksi.php";
    $Nama  = $_POST['Nama'];
    $Alamat    = $_POST['Alamat'];
    $Ttl = $_POST['Ttl'];
    $No_hp = $_POST['No_hp'];
    $No_ktp = $_POST['No_ktp'];
    $No_kartu_keluarga = $_POST['No_kartu_keluarga'];
    $login = mysqli_query($koneksi,"insert into karyawan(Nama,Alamat,Ttl,No_hp,No_ktp,No_kartu_keluarga) values('$Nama','$Alamat','$Ttl','$No_hp','$No_ktp','$No_kartu_keluarga')");
    if($login){
        header("location:data_karyawan.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
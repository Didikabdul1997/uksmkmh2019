<?php
    include "../bantu/koneksi.php";
    $ID_Bidanawal    = $_POST['ID_Bidanawal'];
    $ID_Bidan = $_POST['ID_Bidan'];
    $nama_lengkap   = $_POST['Nama'];
    $Alamat    = $_POST['Alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $spesialis    = $_POST['spesialis'];
    $edit = mysqli_query($koneksi,"update bidan set ID_Bidan='$ID_Bidan', Nama='$nama_lengkap', Alamat='$Alamat',jenis_kelamin='$jenis_kelamin',Spesialis='$spesialis' where ID_Bidan='$ID_Bidanawal'");
    if($edit){
        header("location:data_bidan.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
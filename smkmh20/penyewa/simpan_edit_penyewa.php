<?php
    include "../bantu/koneksi.php";
    $id_awal  = $_POST['id_awal'];
    $id_penyewa   = $_POST['id_penyewa'];
    $nama   = $_POST['nama'];
    $ttL    = $_POST['ttL'];
    $jenis_kelamin   = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $query = "update penyewa set id_penyewa='$id_penyewa', nama='$nama', ttL='$ttL',jenis_kelamin='$jenis_kelamin', alamat='$alamat' where id_penyewa='$id_awal'";
    $edit = mysqli_query($koneksi,$query);
    if($edit){
        header("location:data_penyewa.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
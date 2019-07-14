<?php
    include "../bantu/koneksi.php";
    $id   = $_POST['id'];
    $nama   = $_POST['nama'];
    $alamat    = $_POST['alamat'];
    $kelamin = $_POST['kelamin'];
    $login = mysqli_query($koneksi,"insert into karyawan(id,nama,alamat,kelamin) values('$id','$nama','$alamat','$kelamin')");
    if($login){
        header("location:data_karyawan.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
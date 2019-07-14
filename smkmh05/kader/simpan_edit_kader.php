<?php
    include "../bantu/koneksi.php";
    $id_kaderawal = $_POST['id_kaderawal'];
    $id_kader  = $_POST['id_kader'];
    $nama   = $_POST['nama'];
    $ttl    = $_POST['ttl'];
    $jenis_kelamin    = $_POST['jenis_kelamin'];
    $kelas    = $_POST['kelas'];
    $alamat = $_POST['alamat'];
    $edit = mysqli_query($koneksi,"update kader set id_kader='$id_kader', nama='$nama', ttl='$ttl', jenis_kelamin='$jenis_kelamin', kelas='$kelas', alamat='$alamat' where id_kader='$id_kaderawal'")or die(mysqli_error());
    if($edit){
        header("location:data_kader.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
<?php
    include "../bantu/koneksi.php";
    $nisawal = $_POST['nisawal'];
    $nis   = $_POST['nis'];
    $nama   = $_POST['nama'];
    $ttl    = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $edit = mysqli_query($koneksi,"update santri set nis='$nis', nama='$nama', ttl='$ttl', alamat='$alamat' where nis='$nisawal'")or die(mysqli_error());
    if($edit){
        header("location:data_santri.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
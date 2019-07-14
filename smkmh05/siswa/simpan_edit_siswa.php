<?php
    include "../bantu/koneksi.php";
    $nisnawal = $_POST['nisnawal'];
    $nisn   = $_POST['nisn'];
    $nama   = $_POST['nama'];
    $ttl    = $_POST['ttl'];
    $jenis_kelamin    = $_POST['jenis_kelamin'];
    $kelas    = $_POST['kelas'];
    $alamat = $_POST['alamat'];
    $tanggal = $_POST['tanggal'];
    $keluhan = $_POST['keluhan'];
    $obat = $_POST['obat'];
    $resep = $_POST['resep'];
    $edit = mysqli_query($koneksi,"update siswa set nisn='$nisn', nama='$nama', ttl='$ttl', jenis_kelamin='$jenis_kelamin', kelas='$kelas', alamat='$alamat', tanggal='$tanggal', keluhan='$keluhan', obat='$obat', resep='$resep' where nisn='$nisnawal'")or die(mysqli_error());
    if($edit){
        header("location:data_siswa.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
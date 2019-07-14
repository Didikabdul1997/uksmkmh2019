<?php
    include "../bantu/koneksi.php";
    $nama   = $_POST['nama'];
    $alamat    = $_POST['alamat'];
    $nama_barang = $_POST['nama_barang'];
    $jumlah    = $_POST['jumlah'];
    $edit = mysqli_query($koneksi,"insert into pembeli(nama,alamat,nama_barang,jumlah) values('$nama','$alamat','$nama_barang','$jumlah')")or die(mysqli_error());
    if($edit){
        header("location:data_pembeli.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
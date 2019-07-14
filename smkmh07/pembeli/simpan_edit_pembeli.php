<?php
    include "../bantu/koneksi.php";
    $id_pembeli   = $_POST['id_pembeli'];
    $jumlah_barangawal   = $_POST['jumlah_barangawal'];
    $nama_pembeli  = $_POST['nama_pembeli'];
    $id_barang   = $_POST['id_barang'];
    $alamat   = $_POST['alamat'];
    $jumlah_barang   = $_POST['jumlah_barang'];
    $total = 0;
    $login = mysqli_query($koneksi,"select * from barang where id_barang='$id_barang' && jumlah_stok!='0'");
    $cek = mysqli_num_rows($login);
    if($cek > 0){
        $stok = 0;
        foreach ($login as $row){
            $stok   = $row['jumlah_stok'];
            $harga   = $row['harga'];
            $total = $harga*$jumlah_barang;
        }
        $login = mysqli_query($koneksi,"update pembeli set id_pembeli='$id_pembeli', nama_pembeli='$nama_pembeli', id_barang='$id_barang', alamat='$alamat', jumlah_barang='$jumlah_barang', total='$total' where id_pembeli='$id_pembeli'")or die (mysqli_error());
        if($login){
            $stok = $stok+$jumlah_barangawal;
            $stok = $stok-$jumlah_barang;
            mysqli_query($koneksi,"update barang set jumlah_stok='$stok' where id_barang='$id_barang'");
            header("location:data_pembeli.php");
        }else{
            echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
        } 
    }else{
        echo "<script>alert('Barang Sudah Habis!!');history.go(-1);</script>";
    }
?>
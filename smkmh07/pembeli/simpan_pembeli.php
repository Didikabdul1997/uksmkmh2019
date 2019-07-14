<?php
    include "../bantu/koneksi.php";
    
    $nama_pembeli   = $_POST['nama_pembeli'];
    $id_barang    = $_POST['id_barang'];
    $alamat = $_POST['alamat'];
    $jumlah_barang = $_POST['jumlah_barang'];
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
        $login = mysqli_query($koneksi,"insert into pembeli(nama_pembeli,id_barang,alamat,jumlah_barang,total) values('$nama_pembeli','$id_barang','$alamat','$jumlah_barang','$total')")or die (mysqli_error());
        if($login){
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
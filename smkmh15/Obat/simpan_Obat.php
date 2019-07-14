<?php
    include "../bantu/koneksi.php";
    $kode_obat   = $_POST['kode_obat'];
    $Nama  = $_POST['Nama'];
    $kegunaan    = $_POST['kegunaan'];
    $stok = $stok-$jumlah;
    $TGL_Penerimaan = $_POST['TGL_Penerimaan'];
    $kadaluwarsa = $_POST['kadaluwarsa'];
    $login = mysqli_query($koneksi,"insert into obat(kode_obat,Nama,kegunaan,stok,TGL_Penerimaan,kadaluwarsa) values('$kode_obat','$Nama','$kegunaan','$stok','$TGL_Penerimaan','kadaluwarsa')")or die(mysqli_error());
    if($login){
        header("location:data_Obat.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
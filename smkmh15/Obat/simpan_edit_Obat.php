<?php
    include "../bantu/koneksi.php";
    $kode_obatawal = $_POST['kode_obatawal'];
    $kode_obat   = $_POST['kode_obat'];
    $Nama  = $_POST['Nama'];
    $kegunaan    = $_POST['kegunaan'];
    $stok = $_POST['stok'];
    $TGL_Penerimaan = $_POST['TGL_Penerimaan'];
    $kadaluwarsa = $_POST['kadaluwarsa'];
    $edit = mysqli_query($koneksi,"update Obat set kode_obat='$kode_obat', Nama='$Nama', kegunaan='$kegunaan', stok='$stok',TGL_Penerimaan='$TGL_Penerimaan',kadaluwarsa='$kadaluwarsa' where kode_obat='$kode_obatawal'");
    if($edit){
        header("location:data_Obat.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
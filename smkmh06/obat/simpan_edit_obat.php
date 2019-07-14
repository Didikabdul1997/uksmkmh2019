<?php
    include "../bantu/koneksi.php";
    $id_obatawal = $_POST['id_obatawal'];
    $id_obat   = $_POST['id_obat'];
    $Nama_Obat   = $_POST['Nama_Obat'];
    $Kegunaan    = $_POST['Kegunaan'];
    $jumlah_stok = $_POST['jumlah_stok'];
    $edit = mysqli_query($koneksi,"update Obat set id_Obat='$id_obat', Nama_Obat='$Nama_Obat', Kegunaan='$Kegunaan', jumlah_stok='$jumlah_stok' where id_obat='$id_obatawal'")or die(mysqli_error());
    if($edit){
        header("location:data_Obat.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
<?php
    include "../bantu/koneksi.php";
    $id_Notification_awal = $_POST['id_Notification_awal'];
    $id_Notification = $_POST['id_Notification'];
    $perihal   = $_POST['perihal'];
    $tanggal    = $_POST['tanggal'];
    $penerima = $_POST['penerima'];
    $edit = mysqli_query($koneksi,"update Notification set id_Notification='$id_Notification', perihal='$perihal', tanggal='$tanggal', penerima='$penerima' where id_Notification='$id_Notification_awal'")or die(mysqli_error());
    if($edit){
        header("location:data_Notification.php");
    }else{
        echo "<script>alert('Gagal di Simpan!!');history.go(-1);</script>";
    }    
?>
<?php
    include "../bantu/koneksi.php";
    $id_Notification   = $_GET['id_Notification'];
    $login = mysqli_query($koneksi,"delete from Notification where id_Notification='$id_Notification'") or die(mysqli_error()."errorrorororororof");
    header("location:data_Notification.php");
?>
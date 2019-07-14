<?php
    include "../bantu/koneksi.php";
    $CODE_JUR   = $_GET['CODE_JUR'];
    $login = mysqli_query($koneksi,"delete from jurusan where CODE_JUR='$CODE_JUR'") or die(mysqli_error()."errorrorororororor");
    header("location:data_jurusan.php");
?>
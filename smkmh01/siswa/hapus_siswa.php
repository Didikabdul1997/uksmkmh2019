<?php
    include "../bantu/koneksi.php";
    $nisn   = $_GET['nisn'];
    $login = mysqli_query($koneksi,"delete from siswa where nisn='$nisn'") or die(mysqli_error()."errorrorororororof");
    header("location:data_siswa.php");
?>
 <li class="nav-item"><a href="#" class="nav-link">Services</a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">Support</a>
                                                </li>
<?php
    include "../bantu/session.php";
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Data staf _1| kecamatan parengan</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="../assets/css/owl.carousel.css">
    <link rel="stylesheet" href="../assets/css/owl.theme.css">
    <link rel="stylesheet" href="../assets/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="../assets/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="../assets/css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="../assets/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="../assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="../assets/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="../assets/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="../assets/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="../assets/css/calendar/fullcalendar.print.min.css">
    <!-- x-editor CSS
		============================================ -->
    <link rel="stylesheet" href="../assets/css/editor/select2.css">
    <link rel="stylesheet" href="../assets/css/editor/datetimepicker.css">
    <link rel="stylesheet" href="../assets/css/editor/bootstrap-editable.css">
    <link rel="stylesheet" href="../assets/css/editor/x-editor-style.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="../assets/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="../assets/css/data-table/bootstrap-editable.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="../assets/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <?php
        include "../bantu/menubar.php";
    ?>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="../assets/img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <?php
                include "../bantu/header.php";
            ?>
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">staf_1</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Data staf</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Basic Form Start -->
        <div class="product-status mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Tabel <span class="table-project-n">Data</span> staf_1</h1>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control">
												<option value="">Export Basic</option>
												<option value="all">Export All</option>
												<option value="selected">Export Selected</option>
											</select>
                                    </div>
                                    <div class="add-product">
                                        <a href="tambah_staf.php">Tambah staf_1</a>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="no">NO</th>
                                                 <th data-field="id_staf" data-editable="true">id_staf</th>
                                                <th data-field="nama_staf" data-editable="true">nama_staf</th>
                                               
												<th data-field="alamat" data-editable="true">alamat</th>
                                                <th data-field="action">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                include "../bantu/koneksi.php";
                                                $staf = mysqli_query($koneksi, "SELECT * from staf_1");
                                                $no=1;
                                                foreach ($staf as $row){
                                                    echo "<tr>
                                                        <td></td>
                                                        <td>$no</td>
                                                        <td>".$row['id_staf']."</td>
                                                        <td>".$row['nama_staf']."</td>
                                                        <td>".$row['alamat']."</td>"; ?>
                                                        <td>
                                                            <a href="edit_staf.php?id_staf=<?php echo $row['id_staf'];?>&nama_staf=<?php echo $row['nama_staf'];?>&alamat=<?php echo $row['alamat'];?>"><button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                                            <a href="hapus_staf.php?id_staf=<?php echo $row['id_staf'];?>"><button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
                                                        </td><?php
                                                        echo"</tr>";
                                                    $no++;
                                                }
                                            ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Basic Form End-->
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright &copy; 2019 <a href="https://smkmiftahulhikmah.sch.id">SMK Miftahul Hikmah</a> All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery
		============================================ -->
        <script src="../assets/js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="../assets/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="../assets/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="../assets/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="../assets/js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="../assets/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="../assets/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="../assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../assets/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="../assets/js/metisMenu/metisMenu.min.js"></script>
    <script src="../assets/js/metisMenu/metisMenu-active.js"></script>
    <!-- data table JS
		============================================ -->
    <script src="../assets/js/data-table/bootstrap-table.js"></script>
    <script src="../assets/js/data-table/tableExport.js"></script>
    <script src="../assets/js/data-table/data-table-active.js"></script>
    <script src="../assets/js/data-table/bootstrap-table-editable.js"></script>
    <script src="../assets/js/data-table/bootstrap-editable.js"></script>
    <script src="../assets/js/data-table/bootstrap-table-resizable.js"></script>
    <script src="../assets/js/data-table/colResizable-1.5.source.js"></script>
    <script src="../assets/js/data-table/bootstrap-table-export.js"></script>
    <!--  editable JS
		============================================ -->
    <script src="../assets/js/editable/jquery.mockjax.js"></script>
    <script src="../assets/js/editable/mock-active.js"></script>
    <script src="../assets/js/editable/select2.js"></script>
    <script src="../assets/js/editable/moment.min.js"></script>
    <script src="../assets/js/editable/bootstrap-datetimepicker.js"></script>
    <script src="../assets/js/editable/bootstrap-editable.js"></script>
    <script src="../assets/js/editable/xediable-active.js"></script>
    <!-- Chart JS
		============================================ -->
    <script src="../assets/js/chart/jquery.peity.min.js"></script>
    <script src="../assets/js/peity/peity-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="../assets/js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="../assets/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="../assets/js/main.js"></script>
</body>

</html>
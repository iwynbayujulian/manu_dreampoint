<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Manu Dreampoint | Dashboard</title>
		<meta name="viewport" charset="utf-8" content="width=device-width, initial-scale=1" />
		
		<link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css" />
		<link rel="stylesheet" href="../css/style.min.css" type="text/css" />
		<link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css" />
		
		<script src="../js/jquery.min.js" type="text/javascript"></script>
		<script src="../js/bootstrap.min.js" type="text/javascript"></script>
	</head>
<body>
<div class="wrapper">
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button> 
        <a href="index.php" class="navbar-brand brand-name">Manu Dreampoint</a>
    </div>
    
    <div class="collapse navbar-collapse collapse-in" id="navigation">
        <ul class="nav navbar-nav side-nav">
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="../images/user/user6.jpg" class="img-circle" alt="User">
                </div>
                <div class="pull-left info">
                    <p>William Turner</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <li class="header">MENU NAVIGATION</li>
            <li class="active"><a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a></li>
            <li><a href="index.php?tbl=booking&act=view"><i class="fa fa-file-o fa-fw"></i> Booking</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-file-o fa-fw"></i> Gallery <i class="fa fa-angle-down pull-right"></i></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="index.php?tbl=gallery&act=frm">Form</a></li>
                    <li><a href="index.php?tbl=gallery&act=view">View</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-file-o fa-fw"></i> Package <i class="fa fa-angle-down pull-right"></i></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="index.php?tbl=package&act=frm">Form</a></li>
                    <li><a href="index.php?tbl=package&act=view">View</a></li>
                </ul>
            </li>
        </ul>
         
        <ul class="nav navbar-right top-nav">
            <li><a href="index.php?act=logout">Logout</a></li>       
        </ul> 
    </div>
</nav>

<div class="page-wrapper">
<!-- 	<div class="col-md-12">
		<div class="page-header">
			<h3>Dashboard <small>Control Panel</small></h3>
		</div>
	</div> -->

    <?php
        if (isset($_GET['tbl'])) {
            if ($_GET['tbl'] == 'gallery') {
                if ($_GET['act'] == 'frm') {
                    include "pages/gallery/frm_input_gallery.php";
                }
                else if ($_GET['act'] == 'view') {
                    include "pages/gallery/data_img_gallery.php";
                }
                else if ($_GET['act'] == 'edit') {
                    include "pages/gallery/frm_edit_gallery.php";
                }
                else if ($_GET['act'] == 'delete') {
                    include "pages/gallery/data_delete_gallery.php";
                }
            }
            else if ($_GET['tbl'] == 'booking') {
                if ($_GET['act'] == 'view') {
                    include "pages/booking/data_booking.php";
                }
                else {
                    include "pages/booking/data_delete_booking.php";
                }
            }
            else if ($_GET['tbl'] == 'package') {
                if ($_GET['act'] == 'frm') {
                    include "pages/package/frm_input_package.php";
                }
                else if ($_GET['act'] == 'view') {
                    include "pages/package/data_package.php";
                }
                else if ($_GET['act'] == 'edit') {
                    include "pages/package/frm_edit_package.php";
                }
                else if ($_GET['act'] == 'delete') {
                    include "pages/package/data_delete_package.php";
                }
            }
        }
        else {
            echo "
                <script>
                    alert('Halaman Tidak Ditemukan');
                </script>
            ";
        }
    ?>
</div>
</div>
</body>
</html>
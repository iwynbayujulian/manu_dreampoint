<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Booking</title>
		<meta name="viewport" charset="utf-8" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css" />
		<link rel="stylesheet" href="../css/style.css" type="text/css" />
		<link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css" />
		
		<script src="../js/jquery.min.js" type="text/javascript"></script>
		<script src="../js/bootstrap.min.js" type="text/javascript"></script>
		<script src="../js/stepwizard.js" type="text/javascript"></script>
		<script src="jquery/jquery-3.1.0.js" type="text/javascript"></script>
		
		<script type="text/javascript">
			$('document').ready(function() {
				$('#tampil').load('view_booking.php');
				$('#tombol').click(function() {
					var nama = $('#bookName').val();
					var email = $('#bookEmail').val();
					var date = $('#bookDateReserve').val();
					var phone = $('#bookPhone').val();
					var address = $('#bookAddress').val();
					var bpackage = $('#pk').val();
					var child = $('#bookChild').val();
					var adult = $('#bookAdult').val();

					$.ajax({
						type: 'POST',
						url: "do_booking.php",
						data: 'name=' + nama + '&email=' + email + '&dateReserve=' + date + '&bookPhone=' + phone + '&address=' + address + '&pk=' + bpackage + '&adult=' + adult + '&child=' + child,
						success: function(pesan) {
							if (pesan == "berhasil") {
								$('#tampil').load("view_booking.php");
								alert('Berhasil Booking');
								window.location="booking.php";
							}
							else {
								$('#tampil').load("view_booking.php");
								alert('Gagal Booking');
								window.location="booking.php";
							}

							$('#tampil').load("view_booking.php");
						}
					});
					return false;
				});
			});
		</script>
	</head>
<body>
<!-- Header -->
<div class="col-sm-12 sm-style">
	<div class="container">
	<div class="info">
		<span><i class="fa fa-phone"></i>&nbsp;&nbsp;081-339312000</span><span class="space">|</span>
		<span><i class="fa fa-envelope"></i>&nbsp;&nbsp;manu_dreampoint@gmail.com</span>
	</div>
	</div>
</div>

<div class="col-sm-12">
	<div class="container">
		<div class="col-xs-6 no-pad xs-media">
			<div class="logos">
				<h1>Manu Dreampoint</h1>
			</div>
		</div>
		
		<div class="col-xs-6 xs-media no-pad merge">
			<span class="icon"><a href="#"><i class="fa fa-youtube-play"></i></a></span>
			<span class="icon"><a href="#"><i class="fa fa-twitter"></i></a></span>
			<span class="icon"><a href="#"><i class="fa fa-facebook"></i></a></span>
		</div>
	</div>
</div>
<!-- End -->
<!-- Navigation -->
<div class="col-md-12 clear" style="padding:0;">
<nav class="navbar navbar-inverse" role="navigation">
<div class="container">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a href="#" class="navbar-brand">Navigation</a>
	</div>
	
	<div class="collapse navbar-collapse" id="navigation">
		<ul class="nav navbar-nav">
			<li><a href="../index.php">HOME</a></li>
			<li><a href="booking.php">BOOKING</a></li>
			<li><a href="gallery.php">GALERY</a></li>
			<li><a href="aboutus.php">ABOUT US</a></li>
			<li><a href="contact.php">CONTACT</a></li>
		</ul>
	</div>
</div>
</nav>
</div>
<!-- End -->

<div class="container">
	<!-- Step Wizard -->
	<div class="col-sm-12">
	<div class="stepwizard">
		<div class="stepwizard-row setup-panel">
			<div class="stepwizard-step">
				<a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
				<p>Step 1</p>
			</div>
			<div class="stepwizard-step">
				<a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
				<p>Step 2</p>
			</div>
			<div class="stepwizard-step">
				<a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
				<p>Step 3</p>
			</div>
		</div>
	</div>
	</div>

	<!-- Form -->
	<form action="" method="post" role="form" style="margin-bottom:20px;">
		<!-- Step 1 -->
		<div class="setup-content" id="step-1">
			<div class="col-xs-12"><h1>Step 1</h1></div>
			<div class="col-xs-4">
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" id="bookName" class="form-control" placeholder="Your Name" required />
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" name="email" id="bookEmail" class="form-control" placeholder="Your Email" required />
				</div>
			</div>

			<div class="col-xs-4">
				<div class="form-group">
					<label>Reserve Date</label>
					<input type="date" name="dateReserve" id="bookDateReserve" class="form-control" placeholder="Date" required />
				</div>
				<div class="form-group">
					<label>Phone</label>
					<input type="text" name="phone" id="bookPhone" class="form-control" placeholder="Your Phone" required />
				</div>
			</div>
			<div class="col-xs-4" style="margin-bottom:20px;">
				<div class="form-group">
					<label>Address</label>
					<textarea type="text" name="msg" rows="5" id="bookAddress" class="form-control" placeholder="Your Address"></textarea>
				</div>
				<button	 type="submit" class="btn btn-danger nextBtn pull-right">NEXT</button>
			</div>
			
		</div>


		<div class="setup-content" id="step-2">
		<!-- Step 2 -->
			<div class="col-sm-12"><h1>Step 2</h1></div>
			<div class="col-xs-4" style="margin-bottom:20px;">
				<div class="form-group">
					<label>Package</label>
					<select name="pk" class="form-control" id="pk">
						<option value="">-</option>
						<option value="">Package A</option>
						<option value="">Package B</option>
						<option value="">Package C</option>
					</select>
				</div>
				<button type="submit" class="btn btn-danger nextBtn pull-right">NEXT</button>
			</div>
		</div>

		<div class="setup-content" id="step-3">
		<!-- Step 3 -->
			<div class="col-sm-12"><h1>Step 3</h1></div>
			<div class="col-xs-4" style="margin-bottom:20px;">
				<div class="form-group">
					<label>Adult</label>
					<p><small>IDR</small> 900.000</p>
					<input type="text" name="adult" id="bookAdult" class="form-control" required />
				</div>
				<div class="form-group" style="margin-bottom:20px;">
					<label>Child</label>
					<p><small>IDR</small> 800.000</p>
					<input type="text" name="child" id="bookChild" class="form-control" />
				</div>
				<button type="submit" id="tombol" class="btn btn-success pull-right">BOOK NOW</button>
			</div>
		</div>
	</form>
</div>

<div id="tampil">
</div>

<!--Footer-->
<div class="col-sm-12 bg">
<div class="container">
	<div class="col-xs-4 box1 media-600">
		<h4 class="text-center">LOCATION</h4>
		<p class="text-center">Nusa Lembongan,</p>
		<p class="text-center">Kab Klungkung, Bali Indonesia.</p>
	</div>
	<div class="col-xs-4 text-center media-600">
		<h4 class="text-center">AROUND THE WEB</h4>
		<div class="sosmed">
			<ul>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram"></i></a></li>
			</ul>
		</div>
	</div>
	<div class="col-xs-4 media-600">
		<h4 class="text-center">ABOUT LEMBONGAN ISLAND</h4>
		<p class="text-center"><strong>Nusa Lembongan</strong> is an island located southeast of Bali. it is part of a group of three island that make up the <strong>Nusa Penida</strong> district, of which it is the most famous.</p>
	</div>
</div>
</div>

<div class="col-sm-12 btoom">
	<p class="text-center">&copy Copyright 2016 - Manu Dreampoint</p>
</div>
<!--End-->
</body>
</html>
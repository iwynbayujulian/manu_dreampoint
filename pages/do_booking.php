<?php
	include "../connect/connect.php";
	
	$bookName 		= $_POST['name'];
	$bookEmail		= $_POST['email'];
	$bookDateReserve= $_POST['dateReserve'];
	$bookPhone		= $_POST['bookPhone'];
	$bookAddress	= $_POST['address'];
	$bookPackage	= $_POST['pk'];
	$bookAdult		= $_POST['adult'];
	$bookChild		= $_POST['child'];
	
	$do_insert = mysql_query("INSERT INTO tbl_booking_manu(id_booking, bookName, bookEmail, bookDateReserve, bookPhone, bookAddress, bookPackage, bookAdult, bookChild) VALUES ('111111113', '$bookName', '$bookEmail', '$bookDateReserve', '$bookPhone', '$bookAddress', '$bookPackage', '$bookAdult', '$bookChild')");
	
	if ($do_insert) {
		echo "berhasil";
		
	}
	else {
		echo "gagal";
	}
?>
<html>
<head>
	<title>Booking</title>
</head>
<body>
<table>
	<tr>
		<td>ID Booking</td>
		<td>Nama</td>
		<td>Email</td>
		<td>Date</td>
		<td>Phone</td>
		<td>Address</td>
		<td>Package</td>
		<td>Adult</td>
		<td>Child</td>
	</tr>

<?php
	include "../connect/connect.php";

	$select = mysql_query("SELECT * FROM tbl_booking_manu");
	while($row=mysql_fetch_array($select)) {
		echo "
			<tr>
	 			<td>$row[id_booking]</td>
	 			<td>$row[bookName]</td>
				<td>$row[bookEmail]</td>
	 			<td>$row[bookDateReserve]</td>
	 			<td>$row[bookPhone]</td>
				<td>$row[bookAddress]</td>
	 			<td>$row[bookPackage]</td>
	 			<td>$row[bookAdult]</td>
	 			<td>$row[bookChild]</td>
	 		</tr>
		";
	}

	// foreach($select as $row) {
	// 	echo "
	// 		<tr>
	// 			<td>$row[id_booking]</td>
	// 			<td>$row[bookName]</td>
	// 			<td>$row[bookEmail]</td>
	// 			<td>$row[bookDateReserve]</td>
	// 			<td>$row[bookPhone]</td>
	// 			<td>$row[bookAddress]</td>
	// 			<td>$row[bookPackage]</td>
	// 			<td>$row[bookAdult]</td>
	// 			<td>$row[bookChild]</td>
	// 		</tr>
	// 	";
	// }
?>
</table>
</body>
</html>
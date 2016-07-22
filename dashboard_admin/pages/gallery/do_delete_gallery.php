<?php
	include "../../connect/connect.php";

	$id = $_GET['id_gallery'];

	$delete = mysql_query("DELETE FROM tbl_gallery where id_gallery='$id'");

	if ($delete) {
		echo "
			<script>
				alert('Berhasil Menghapus Foto');
				window.location='data_img_gallery.php';
			</script>
		";
	}
	else {
		echo "
			<script>
				alert('Gagal Menghapus Foto');
				window.location='data_img_gallery.php';
			</script>
		";
	}
?>
<?php
	include "../../../connect/connect.php";

	$caption = $_POST['caption'];
	$foto_tmp = $_FILES['foto_gallery']['tmp_name'];
	$foto_name = $_FILES['foto_gallery']['name'];
	$foto_path = "../gallery"."/".$foto_name;

	move_uploaded_file($foto_tmp, $foto_path);

	$insert = mysql_query("INSERT INTO tbl_gallery(id_gallery, galleryCaption, galleryFoto) VALUES (NULL, '$caption', '$foto_path')");

	if ($insert) {
		echo "
			<script>
				alert('Berhasil Input Foto');
				window.location='frm_input_gallery.php';
			</script>
		";
	}
	else {
		echo "
			<script>
				alert('Gagal Input Foto, Coba Sekali Lagi');
				window.location='frm_input_gallery.php';
			</script>
		";
	}
?>
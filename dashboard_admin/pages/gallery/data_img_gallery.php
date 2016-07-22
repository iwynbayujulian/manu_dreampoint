
	<div class="col-md-12">
		<div class="page-header">
			<h3>GALLERY <small>Data Images</small></h3>
		</div>
	</div>

    <!-- Data Table -->
    <div class="col-lg-12"> 
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <th>No</th>
                    <th>Caption</th>
                    <th>Image</th>
                    <th colspan="2">Action</th>
                </thead>
                <tbody>
                <?php
                    include "../connect/connect.php";

                    $select = mysql_query("SELECT * FROM tbl_gallery order by id_gallery DESC");
                    $find = mysql_num_rows($select);

                    if ($find > 0) {
                        while($row=mysql_fetch_array($select)) {
                            echo "
                                <tr>
                                    <td>$row[id_gallery]</td>
                                    <td>$row[galleryCaption]</td>
                                    <td><img src='$row[galleryFoto]' class='text-center' width='250px' height='160px'></td>
                                    <td><a href=''><i class='fa fa-pencil' title='Edit'></i></a></td>
                                    <td><a href='do_delete_gallery.php?id_gallery=$row[id_gallery]'><i class='fa fa-trash-o' title='Delete'></i></a></td>
                                </tr>
                            ";
                        }
                    }
                    else {
                        echo "
                            <tr>
                                <td colspan='5'>Data Tidak Ada</td>
                            </tr>
                        ";
                    }
                    
                ?>
                </tbody>
            </table>
        </div>
    </div>
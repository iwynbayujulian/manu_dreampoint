
	<div class="col-md-12">
		<div class="page-header">
			<h3>FORM INPUT <small>Preview</small></h3>
		</div>
	</div>

    <div class="col-md-5">
        <form action="do_insert_gallery.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Image</label>
                <input type="file" name="foto_gallery">
            </div>

            <div class="form-group">
                <label>Caption</label>
                <textarea type="text" name="caption" class="form-control" placeholder="Enter.." required></textarea>
            </div>
            <button type="submit" name="btn" class="btn btn-info">INPUT</button>
        </form>
    </div>
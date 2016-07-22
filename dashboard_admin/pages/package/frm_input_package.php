
	<div class="col-md-12">
		<div class="page-header">
			<h3>FORM INPUT <small>Preview</small></h3>
		</div>
	</div>

    <div class="col-md-5">
        <form action="#" method="post" role="form">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Name" required />
            </div>

            <div class="form-group">
            <style type="text/css">
                .table>tbody>tr>td{
                    text-align: left;
                    border: 0;
                    padding:5px;
                }
            </style>
                <label>Select</label>
                <table class="table">
                    <tr>
                        <td><input type="checkbox" name="change" value="dive"> Diving</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="change" value="snorke"> Snorkelling</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="change" value="fish"> Fishing</td>
                    </tr>
                </table>
            </div>

            <div class="form-group">
                <label>Harga <small>/Person</small></label>
                <div class="input-group">
                    <span class="input-group-addon">Rp.</span>
                    <input type="text" name="hrg" class="form-control" />
                </div>
            </div>

            <div class="form-group">
                <label>Image</label>
                <input type="file" name="img" />
            </div>
            <button type="submit" name="btn" class="btn btn-info">INPUT</button>
        </form>
    </div>
</div>
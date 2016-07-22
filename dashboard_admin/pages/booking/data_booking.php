	<div class="col-md-12">
		<div class="page-header">
			<h3>BOOKING <small>Data Tables</small></h3>
		</div>
	</div>

        <Script type="text/javascript">
            $('document').ready(function() {
                $('#mantap').load('pages/booking/mantap.php');
                setInterval(function() {
                    $('#mantap').load('pages/booking/mantap.php');
                }, 1000);
            });
        </script>


    <div id="mantap"></div>
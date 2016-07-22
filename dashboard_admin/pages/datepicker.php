<html>
<head>
<title>Datepicker</title>
<script src="jquery/jquery-3.1.0.js"></script>
  <script src="jquery/jquery-ui.js"></script>
  <script>
  	$('document').ready(function() {
      $('#tampil').load('loaddata.php');
  		$( function() {
  		 	$('#mantep').datepicker({
  		 		// minDate: new Date(),
  		 		dateFormat: 'yy-mm-dd',
  		 		onSelect: function(dateText, inst) {
  		 			var getName = dateText;

            if (getName) {
              $.ajax({
                type: 'post',
                url: 'loaddata.php',
                data: {
                  username: getName,
                },
                success: function(response) {
                  $('#tampil').html(response);
                }
              });
            }
            else {
              $('#tampil').load('loaddata.php');
            }
  		 		}
  		 	});
  		});
  	});
  </script>
 <Script>
  // $('document').ready(function() {
  //   $('#tampil').load('loaddata.php');
  // });
   
  //     function loadData() {
  //       var getName = $('#selalu').val();

  //       if (getName) {
  //         $.ajax({
  //           type: 'post',
  //           url: 'loaddata.php',
  //           data: {
  //             username: getName,
  //           },
  //           success: function(response) {
  //             $('#tampil').html(response);
  //           }
  //         });
  //       }
  //       else {
  //         $('#tampil').load('loaddata.php');
  //       }
  //     }
  	
  // </script>

  <script>
      function mantepselalu() {
        alert('mantep selalu');
      }
  </script>
<head>

<body>
	<div id="mantep"></div>
	<div id="tampil"></div>
</body>
</html>
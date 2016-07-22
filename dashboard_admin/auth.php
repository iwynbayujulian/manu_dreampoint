<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Login</title>
		<meta name="viewport" charset="utf-8" content="width=device-width, initial-scale=1" />
		
		<link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css" />
		<link rel="stylesheet" href="../css/style.min.css" type="text/css" />
		<link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css" />
	</head>
<body style="background:rgba(74, 210, 232, 0.65);">
<div class="container">
	<div class="col-md-4 col-md-offset-4" style="margin-top:100px;">
		<div class="panel panel-default md_pnl">
			<div class="panel-body">
			<form role="form" action="#" method="post">
				<h3 class="text-center txt">Login Admin</h3>
				<div class="form-group">
					<div class="input-group">
						<input type="text" name="user" class="form-control" placeholder="User Name" autofocus required />
						<span class="input-group-addon">
							<i class="fa fa-user"></i>
						</span>
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
						<input type="password" name="pass" class="form-control" placeholder="Password" required />
						<span class="input-group-addon">
							<i class="fa fa-lock"></i>
						</span>
					</div>
				</div>
				<button type="submit" class="btn-login">LOGIN</button>
			</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>
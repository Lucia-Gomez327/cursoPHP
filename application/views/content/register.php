	<title>Register</title>
</head>
<body>
<div class="container-fluid col-md-6">
	<br>
	<form method="post" class="form" action="<?= base_url();?>User/logged">
		<div class="form-group">
			<label for="user" class="text-muted">User</label>
			<input type="text" class="form-control" placeholder="user" id="user" name="user">
		</div>	
		<div class="form-group">
			<label for="passw" class="text-muted">Password</label>
			<input type="password" class="form-control" placeholder="password" id="passw" name="passw">	
		</div>
		<input type="submit" class="btn btn-success" onclick="Redirect()" id="submit" value="Registrar">
	</form>
</div>
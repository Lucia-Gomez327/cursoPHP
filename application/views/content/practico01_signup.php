	<title>Register</title>
</head>
<body>
	<div class="container col-md-6">
		<br>
		<form method="post" class="form" action="<?= base_url();?>practico01/validate"> 
			<div class="row">
				<div class="form-group col-md-6">
					<input type="text" class="form-control" placeholder="Name" id="name" name="name">
					
				</div>	<div class="col-md-6">	
					<div class="form-group ">
						<input type="text" class="form-control" id="Lastname" name="lastname" placeholder="Last name">
					</div>
				</div>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="email" name="email" placeholder="Email">
			</div>	
			<div class="form-group">
				<input type="password" class="form-control" placeholder="Password" id="password" name="password">	
			</div>

			<div class=" btn-group-justified ">
				<input type="submit" class="btn btn-success" id="signup" value="Registrar">
				<a href="<?= base_url();?>practico01/login"  class=" float-right" id="login">Login</a>
			</div>
		</form>
	</div>
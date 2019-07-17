	<title>Login</title></head><body>
		<div class="container text-center col-md-5">
			<br>
			<h1 class="text-primary">Usuario</h1>

			<form class="container " action="<?= base_url(); ?>practico01/logged" method="post">
				<div class="form-group">	
					<input class="form-control " type="text" name="email" id="email" placeholder="Email">
				</div>
				
				<div class="form-group">
					<input class="form-control" type="password" name="passw" value="" id="passw" placeholder="'Password'">
				</div>


				<div class=" btn-group-justified ">
					<input class="btn btn-primary float-left" id="ingresar" value="ingresar" type="submit">
					<a href="<?= base_url();?>practico01/signup"  class=" float-right" id="registrar">Sign Up</a>
				</div>
			</form>
		</div>

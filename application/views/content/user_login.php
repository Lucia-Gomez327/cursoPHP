	<title>Login</title></head><body>
		<div class="container text-center col-md-5">
			<br>
			<h1 class="text-primary">Usuario</h1>

			<form class="container " acftion="<?= base_url(); ?>User/logged" method="post">
				<div class="form-group">	
					<input class="form-control " type="text" name="user" id="user" placeholder="User">
				</div>

				<div class="form-group">
					<input class="form-control" type="password" name="passw" value="" id="passw" placeholder="'Password'">
				</div>


				<div class=" btn-group-justified ">
					<input class="btn btn-primary float-left" id="ingresar" value="ingresar" type="submit">

					<input class="btn btn-success float-right" id="registrar" value="Registrarse" type="button">
				</div>
			</form>
		</div>

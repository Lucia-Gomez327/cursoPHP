<title>Agenda</title>
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-expand-sm bg-light">
			<span class="navbar-brand w-100">
				<h1 class="text-info">Contactos</h1>
			</span>
			<ul class=" navbar-nav ">
				<div class="btn-group mb-2 btn-group-lg mr-2 ">



					<button type="button" class="btn btn-success w" data-toggle="modal" data-target="#myModal"><i class="fas fa-plus"></i>Agregar</button>

					<!-- Modal -->


					<div class="modal fade" id="myModal">
						<div class="modal-dialog">
							<div class="modal-content">

								<!-- Modal Header -->
								<div class="modal-header">
									<h4 class="modal-title">AGENDAR CONTACTO</h4>
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>

								<!-- Modal Body -->
								<div class="container">
									<div class="row main"> 
										<div class="col-sm-12">
											<div class="main-login main-center">
												<!-- FORM -->
												<form class="form-horizontal" method="post" action="<?= base_url();?>AgendaContactos/agregar">

													<div class="form-group">
														<label for="email" class="cols-sm-2 control-label"><b>NOMBRE</b></label>
														<div class="cols-sm-10">
															<div class="input-group">
																<span class="input-group-text"><i class="fas fa-user-alt" aria-hidden="true"></i></span>
																<input type="text" class="form-control" name="nombre" id="nombre"  placeholder="Nombre"/>
															</div>
														</div>
													</div>

													<div class="form-group">
														<label for="email" class="cols-sm-2 control-label"><b>APELLIDO</b></label>
														<div class="cols-sm-10">
															<div class="input-group">
																<span class="input-group-text"><i class="fas fa-user-alt" aria-hidden="true"></i></span>
																<input type="text" class="form-control" name="apellido" id="apellido"  placeholder="Apellido"/>
															</div>
														</div>
													</div>

													<div class="form-group">
														<label for="username" class="cols-sm-2 control-label"><b>EDAD</b></label>
														<div class="cols-sm-10">
															<div class="input-group">
																<span class="input-group-text"><i class="fa fa-user-tag fa" aria-hidden="true"></i></span>
																<input type="text" class="form-control" name="edad" id="edad"  placeholder="Edad"/>
															</div>
														</div>
													</div>

													<div class="form-group">
														<label for="email" class="cols-sm-2 control-label"><b>EMAIL</b></label>
														<div class="cols-sm-10">
															<div class="input-group">
																<span class="input-group-text"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
																<input type="text" class="form-control" name="email" id="email"  placeholder="Email"/>
															</div>
														</div>
													</div>

													<div class="form-group">
														<label for="number" class="cols-sm-2 control-label"><b>TELEFONO</b></label>
														<div class="cols-sm-10">
															<div class="input-group">
																<span class="input-group-text "onkeypress="return soloNumeros(event);" value="1"><i class="fas fa-phone-alt" aria-hidden="true"></i></span>
																<input type="number" class="form-control" name="telefono" id="telefono"  placeholder="Telefono"/>
																<script>
																	function soloNumeros(e)
																	{
																		var keynum = window.event ? window.event.keyCode : e.which;
																		if ((keynum == 8) || (keynum == 46))
																			return true;

																		return /\d/.test(String.fromCharCode(keynum));
																	}
																</script>	
															</div>
														</div>
													</div>

													<div class="form-group">
														<input name="foto" id="foto" type="file" class="form-control-file border">
													</div>
													<button type="button"  class="btn btn-primary btn-lg btn-block login-button">AGENDAR</button>
												</form>
											</div>
										</div>
									</div>

									<!-- Modal footer -->
									<div class="modal-footer">
										<button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>
									</div>
								</div>
							</div>
						</div>
					</div>





					
					
					<button class="btn  btn-outline-danger"><img width="20px" src="https://agrox.by/files/images/trash_13591.png" alt=""></button>
				</div>
				<div class="btn-group mb-2 btn-group-lg ">
					<input type="text" placeholder="Buscar" id="buscar" name="buscar">
					<button class="btn btn-outline-info"><img width="20px" src="https://images.vexels.com/media/users/3/143466/isolated/preview/b47bfb19d11e66c3be00ccb0632047ce-lupa-simple-by-vexels.png" alt=""></button>
				</div>
			</nav>
			<!-- Lista Contactos -->
			<div id="listaContactos" class="list-group">
				<?= $contactos; ?>


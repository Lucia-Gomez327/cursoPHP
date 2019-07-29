
<button id="btn_modal"  type="button" class="btn btn-success " data-toggle="modal" data-target="#myModal"><i class="fas fa-plus d-inline mr-2"></i>Agregar</button>

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
							<form id="form" enctype="multipart/form-data" class="form-horizontal" method="post" action="<?= base_url();?>Agendacontactos/agregar">
								<input class="d-none" id="f_id" name="id">
								<div class="form-group">
									<label for="email" class="cols-sm-2 control-label"><b>* NOMBRE</b></label>
									<div class="cols-sm-10">
										<div class="input-group">
											<span class="input-group-text"><i class="fas fa-user-alt" aria-hidden="true"></i></span>
											<input type="text" class="form-control" name="nombre" id="f_nombre"  placeholder="Nombre">
										</div>
									</div>
								</div>

								<div class="form-group">
									<label for="email" class="cols-sm-2 control-label"><b>APELLIDO</b></label>
									<div class="cols-sm-10">
										<div class="input-group">
											<span class="input-group-text"><i class="fas fa-user-alt" aria-hidden="true"></i></span>
											<input type="text" class="form-control" name="apellido" id="f_apellido"  placeholder="Apellido">
										</div>
									</div>
								</div>

								<div class="form-group">
									<label for="DNI" class="cols-sm-2 control-label"><b>DNI</b></label>
									<div class="cols-sm-10">
										<div class="input-group">
											<span class="input-group-text"><i class="fas fa-user-alt" aria-hidden="true"></i></span>
											<input type="text" class="form-control" name="DNI" id="f_DNI"  placeholder="DNI">
										</div>
									</div>
								</div>


								<div class="form-group">
									<label for="username" class="cols-sm-2 control-label"><b>FECHA DE NACIMIENTO</b></label>
									<div class="cols-sm-10">
										<div class="input-group">
											<span class="input-group-text"><i class="fa fa-user-tag fa" aria-hidden="true"></i></span>
											<input type="date" class="form-control date " name="fechaN" id="f_fechaN"  placeholder="Fecha de Nacimiento">
										</div>
									</div>
								</div>

								<div class="form-group">
									<label for="email" class="cols-sm-2 control-label"><b>EMAIL</b></label>
									<div class="cols-sm-10">
										<div class="input-group">
											<span class="input-group-text"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
											<input type="text" class="form-control" name="email" id="f_email"  placeholder="Email">
										</div>
									</div>
								</div>

								<div class="form-group">
									<label for="telefono" class="cols-sm-2 control-label"><b>* TELEFONO</b></label>
									<div class="cols-sm-10">
										<div class="input-group">
											<span class="input-group-text "onkeypress="return soloNumeros(event);" value="1"><i class="fas fa-phone-alt" aria-hidden="true"></i></span>
											<input type="text" class="form-control" name="telefono" id="f_telefono"  placeholder="Telefono">
										</div>
									</div>
								</div>


								<div class="form-group">
									<input type="file" name="foto" id="foto"  class="form-control-file border">
								</div>
								<button id="f_button" type="submit"  class="btn btn-primary btn-lg btn-block login-button">AGENDAR</button>

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

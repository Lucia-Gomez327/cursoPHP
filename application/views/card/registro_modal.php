
<button id="btn_modal"  type="button" class="btn btn-success " data-toggle="modal" data-target="#myModal"><i class="fa fa-user-plus d-inline mr-2"></i>Agregar</button>

<!-- Modal -->


<div class="modal fade" id="myModal">
	<div class="modal-dialog">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header text-center">
				<h3 class="modal-title ml-5 text-primary"> 
					<i class="fas fa-user-astronaut"></i>
					<!-- <i class="far fa-address-card"></i> -->
				&nbsp; AGENDAR CONTACTO</h3>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal Body -->
			<div class="container">
				<form id="form" enctype="multipart/form-data" class="form-horizontal" method="post" action="<?= base_url();?>Agendacontactos/agregar">
					<div class="row main"> 
						<div class="col-sm-12">
							<div class="main-login main-center">
								<!-- FORM -->
								<input class="d-none" id="f_id" name="id">

								<div class="form-group">
									<label for="nombre" class="cols-sm-2 control-label"><b>* NOMBRE</b></label>
									<div class="cols-sm-10">
										<div class="input-group">
											<span class="input-group-text"><i class="fas fa-user-alt" aria-hidden="true"></i></span>
											<input type="text" class="form-control" name="nombre" id="f_nombre"  placeholder="Nombre">
										</div>
									</div>
								</div>

								<div class="form-group">
									<label for="apellido" class="cols-sm-2 control-label"><b>APELLIDO</b></label>
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
											<span class="input-group-text"><i class="fas fa-portrait"></i></span>
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

									<div class="custom-file">
										<input type="file" class="custom-file-input form-control-file border" name="foto" id="foto" lang="es">
										<label class="custom-file-label " for="customFileLang" >Seleccionar Foto de Perfil</label>
									</div>
								</div>
							</div>
						</div> 	

						<!-- Modal footer -->
						<div class="modal-footer w-100 mr-3">
							<div class="row btn-group w-100">
								
								<button id="btn_agendar" type="submit"  class=" col-md-10 btn btn-success btn-lg "><i class="fas fa-user-check"></i> &nbsp;AGENDAR</button>
								<button type="button" class=" col-md-2 btn btn-outline-danger" data-dismiss="modal"><i class="fas fa-chevron-right"></i></button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

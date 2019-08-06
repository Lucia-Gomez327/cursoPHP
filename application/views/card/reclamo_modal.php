
<button data-toggle="modal" data-target="#reclamoModal" id="btn_reclamo" type="button" class="col-md-10 btn btn-outline-warning" ata-toggle="tooltip" data-placement="bottom" title="Reclamar" onclick="quitarSugerencias()"><i class="fa fa-bullhorn "></i></button>
<!-- Modal -->

<div class="modal fade" id="reclamoModal">
	<div class="modal-dialog">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h2 class="modal-title text-center text-primary">Reclamos y Sugerencias</h2>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal Body -->
			<div class="container">
				<!-- FORM -->
				<form id="form" enctype="multipart/form-data" class="form-horizontal" method="post" action="<?= base_url();?>Agendacontactos/agregarReclamo">
					<div class="row main mb-3"> 
						<div class="col-sm-12 col-md-12">
							<div class="main-login main-center">
								<div class="md-form amber-textarea active-amber-textarea-2">
									<textarea class="md-textarea form-control" name="contenido_reclamo" id="contenido_reclamo" placeholder="Escribe tu reclamo aquí..."  rows="4"></textarea>
								</div>				
							</div>
						</div>
					</div> 	
					<!-- Modal footer -->
					<div class="form-group w-100 mb-4">
						<button id="btn_sugerencias" onclick="Reclamos()"  type="button" class="btn btn-outline-primary btn-md" data-dismiss="modal" ata-toggle="tooltip" title="Más reclamos y soluciones">Sugerencias</button>
						<button id="btn_reclamar" type="submit"   class="btn btn-warning btn-lg login-button float-right	" ata-toggle="tooltip" title="Reclamar"><i class="fa fa-bullhorn"></i></button>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>

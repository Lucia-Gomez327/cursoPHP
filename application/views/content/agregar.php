<link rel="stylesheet" href="<?= base_url(); ?>assets/Bootstrap/css/bootstrap.min.css">
<script src="<?= base_url(); ?>assets/JQuery/js/jquery-3.4.1.min.js"></script>
<link rel="stylesheet" href="<?= base_url();?>font-awesome/css/all.css">
<link  href="<?= base_url();?>css/css_form.css" rel="stylesheet">
</head>
<body>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fas fa-plus-square"></i></button>

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
					<form class="form-horizontal" method="post" action="#">
						
						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label"><b>NOMBRE</b></label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-text"><i class="fas fa-user-alt" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="Nombre" id="Nombre"  placeholder="Nombre"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label"><b>APELLIDO</b></label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-text"><i class="fas fa-user-alt" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="Apellido" id="Apellido"  placeholder="Apellido"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label"><b>EDAD</b></label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-text"><i class="fa fa-user-tag fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="Edad" id="Edad"  placeholder="Edad"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label"><b>EMAIL</b></label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-text"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="Email" id="Email"  placeholder="Email"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="number" class="cols-sm-2 control-label"><b>TELEFONO</b></label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-text "onkeypress="return soloNumeros(event);" value="1"><i class="fas fa-phone-alt" aria-hidden="true"></i></span>
									<input type="number" class="form-control" name="Telefono" id="Telefono"  placeholder="Telefono"/>
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

						<div class="form-group ">
							<button type="button" id="f_agendar"class="btn btn-primary btn-lg btn-block login-button">AGENDAR</button>
						</div>
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
  













<script src="<?= base_url(); ?>assets/Bootstrap/js/bootstrap.min.js"></script>
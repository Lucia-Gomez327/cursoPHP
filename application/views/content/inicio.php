<title>Agenda</title>
</head>
<body style="background: url('<?php echo base_url();?>images/Back/white4.jpg');background-size: 100%; padding-top: 33px;">
	<div class="container" >
		<nav class="navbar navbar-expand-sm bg-light" style=" border-radius: 9px">
			<span class="navbar-brand w-100">
				<h1 class="text-center text-default ">Contactos</h1>
			</span>
			<ul class=" navbar-nav ">
				<div class="btn-group mb-2 btn-group-lg mr-2 ">

					<?= $this->load->view('card/registro_modal',null,true);?>

					<button class="btn  btn-outline-danger"><i class="fa fa-trash" ata-toggle="tooltip" data-placement="bottom" title="Eliminar usuarios"></i></button>
				</div>
				<div class="btn-group mb-2 btn-group-lg mr-2 ">
					<input type="text" placeholder="Buscar" id="buscar" name="buscar">
					<button class="btn btn-outline-info"><i class="fa fa-search"></i></button>
				</div>


				<div class="btn-group mb-2 btn-group-lg ">
					<button id="reclamo" class="btn btn-outline-warning" ata-toggle="tooltip" data-placement="bottom" title="Reclamos y Sugerencias"><i class="fa fa-bullhorn"></i></button>
				</div>

				
			</nav>
			<!-- Lista Contactos -->
			<div id="listaContactos" class="list-group">
				<?= $contactos; ?>


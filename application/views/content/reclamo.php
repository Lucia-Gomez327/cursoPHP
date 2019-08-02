<title>Reclamos y Sugerencias</title>
</head>
<body style="background: url('<?php echo base_url();?>images/Back/white4.jpg');background-size: 100%; padding-top: 33px;">
	<div class="container" >
		<nav class="navbar navbar-expand-sm bg-light" style=" border-radius: 9px">
			<span class="navbar-brand w-100">
				<h1 class="text-center text-default">Reclamos y Sugerencias</h1>
			</span>
			<ul class=" navbar-nav ">
				<div class="btn-group mb-2 btn-group-lg mr-2 ">
					<!-- REGISTRO -->
					<?= $this->load->view('card/reclamo_modal',null,true);?>

					<button id="eliminar_usuarios" class="btn  btn-outline-danger" ata-toggle="tooltip" data-placement="bottom" title="Eliminar usuarios"><i class="fa fa-trash" ></i></button>
				</div>
				<div class="btn-group mb-2 btn-group-lg mr-2 ">
					<input type="text" placeholder="  Buscar..." id="buscar" name="buscar">
					<button class="btn btn-outline-info"><i class="fa fa-search"></i></button>
				</div>
				
			</nav>
			<!-- Lista Contactos -->
		<!-- 	<div id="listaContactos" class="list-group">
		 		<x?= $contactos; ?> -->


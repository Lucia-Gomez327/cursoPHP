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

					<?= $this->load->view('card/registro_modal',null,true)?>

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


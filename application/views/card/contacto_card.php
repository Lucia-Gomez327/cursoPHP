<div id="C_<?php echo $id;?>" data-toggle="collapse" data-target="#info<?php echo $id;?>"  class="list-group-item list-group-item-action flex-column align-items-start" style="background: url('<?php echo base_url();?>images/Back/white3.png'); background-size: 100%;border-radius: 9px">
	<div class=" card promoting-card  d-flex w-100 justify-content-between">
		<div class="card-body d-flex flex-row" >		
			<img width="160px" src="<?php echo  base_url()."db/img/".$foto;?>" class="img-fluid z-depth-1 rounded-circle" alt="">
			<!------------ CARD BODY ------------>
			<div class="card-body">
				<div id="id" class="d-none"><?php echo $id?></div>
				<h1>
					<span id="nombre"><?php echo $nombre;?></span> &nbsp;
					<span id="apellido"><?php if(isset($apellido)){echo $apellido; };?></span>
				</h1>
				<div class="collapse-content">
					<table>
						<tr>
							<td colspan="2"><h3 class="text-success" id="telefono"><?php echo $telefono;?></h3></td>
						</tr>
						<?php if(isset($email)){?>
							<tr>
								<td colspan="2"><h5 class="text-info" id="email"><?php echo $email;?></h5></td>
							</tr>
						<?php }?>
					</table>
				</div>
			</div>

		</div>
		<div class="collapse " id="info<?php echo $id?>">
			<div class="row text-center">
				<div class="col ">
					<?php if($fechaN != 0){?>	
						Fecha de Nacimiento :  <span id="fechaN"><?php echo $fechaN;?></span>
					<?php }?>
					<?php if($DNI != 0){?>
						DNI : <span id="DNI"><?php echo $DNI;?></span>

					<?php }?>
				</div>
				<div class="col-md-3 btn-group">
					<button  data-toggle="modal" data-target="#myModal" id ="editar.<?php echo $id?>" onclick="Editar(this)" class="btn btn-info">Editar</button>
					<button id ="eliminar<?php echo $id?>" class="btn btn-danger">Eliminar</button>
				</div>
			</div>
		</div>
	</div>
</div>



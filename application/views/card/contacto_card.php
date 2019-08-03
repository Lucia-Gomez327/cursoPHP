<div name="Contacto_Card"   id="C_<?php echo $id;?>" data-toggle="collapse" data-target="#info<?php echo $id;?>"  class="list-group-item list-group-item-action flex-column align-items-start" style="background: url('<?php echo base_url();?>images/Back/white3.png'); background-size: 100%;border-radius: 9px">
	
	<div class=" card promoting-card  d-flex w-100 justify-content-between">
		<!-- CHECKBOX ELIMINACION -->
		<div name="cb_eliminar" class="col-md-2 d-none position-absolute float-right ">
			<input type="checkbox" class="form-control " >
		</div>
		
		<div class="card-body d-flex flex-row " >		
			<!-- IMAGE -->
			<div style="width: 160px;height: 160px;  border-radius: 50%;overflow: hidden;text-align: center; " >	
				<img  style="height: 100%; object-fit: cover;  "  src="<?php echo  base_url()."db/img/".$foto;?>" class="img-responsive center-block" alt="">
			</div>
			<!------------ CARD BODY ------------>
			<div class="card-body">
				<!-- ↓ ID -->
				<div id="id" class="d-none"><?php echo $id?></div>
				<h1>
					<span id="nombre"><?php echo $nombre;?></span> <span id="apellido"><?php if(isset($apellido)){echo $apellido; };?></span>
				</h1>
				<div  class="collapse-content">
					<table>
						<tr>
							<td colspan="2"><h3 class="text-success"><i class="fas fa-phone-alt"></i> <span  id="telefono"><?php echo $telefono;?></span></h3></td>
						</tr>
						<?php if(isset($email) && $email != null){?>
							<tr>
								
								<td colspan="2"><h5 class="text-info" > <i class="fas fa-envelope"></i> <span id="email"><?php echo $email;?></span></h5></td>
							</tr>
						<?php }?>
					</table>
				</div>
			</div>

		</div>
		<!-- INFO -->
		<div class="collapse " name="info" id="info<?php echo $id?>">
			<div class="row text-center ">
				
				<h5 class="col offset-md-1">
					<?php if($fechaN != 0){?>
						<i class="far fa-calendar-alt"></i>
						Fecha de Nacimiento :  <span id="fechaN"><?php echo $fechaN;?></span>
					<?php }?>
				</h5>
				
				<?php if($DNI != 0){?>

					<h5 class="col">
						<i class="fas fa-portrait"></i>
						DNI : <span id="DNI"><?php echo $DNI;?></span>
					</h5>
				<?php }?>

				<div class="col-md-3 btn-group">

					<button  data-toggle="modal" data-target="#myModal" id ="editar.<?php echo $id?>" onclick="Editar(this)"   class="btn btn-info"><i class="fas fa-magic"></i> Editar</button>
					<button id="eliminar.<?php echo $id?>" class="btn btn-sm  btn-danger" onclick="Eliminar(this)">
					 <i class="fas fa-user-times w-100 "></i>
					</button>
				</div>
			</div>
		</div>
	</div>
</div>

<div data-toggle="collapse" data-target="#info<?=$id?>"  class="list-group-item list-group-item-action flex-column align-items-start ">
	<div class=" card promoting-card  d-flex w-100 justify-content-between">
		<div class="card-body d-flex flex-row">		
			<img width="160px" src="<?= $foto;?>" class="img-fluid z-depth-1 rounded-circle" alt="">
			<div class="card-body">
				<h1><?=$nombre;?>
				<?php if(isset($apellido)){echo " ".$apellido; };?></h1>

				<div class="collapse-content">
					<table>
						<tr>
							<td colspan="2"><h3 class="text-success"><?=$telefono;?></h3></td>
						</tr>
						<?php if(isset($email)){?>
							<tr>
								<td colspan="2"><h5 class="text-info"><?=$email;?></h5></td>
							</tr>
						<?php }?>
					</table>
				</div>
			</div>

		</div>
		<div class="collapse" id="info<?=$id?>">
			<?php if(isset($fechaN)){?>
				<tr>
					<th >Fecha de Nacimiento :</th>
					<td><?=$fechaN;?></td>
				</tr>
			<?php }?>
			<?php if(isset($DNI)){?>
				<tr>
					<th>DNI :</th>
					<td><?=$DNI;?></td>
				</tr>
				<?php }?></div>
			</div>


		</div>



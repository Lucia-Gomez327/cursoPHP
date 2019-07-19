<div class="list-group-item list-group-item-action flex-column align-items-start ">

	<div class=" card promoting-card  d-flex w-100 justify-content-between">
		<div class="card-body d-flex flex-row">
			
			<img width="160px" src="<?= $foto;?>" class="img-fluid z-depth-1 rounded-circle" alt="">

			<div class="card-body">
				<h1><?=$nombre;?>
				<?php if(isset($apellido)){echo " ".$apellido; };?></h1>
				<div class="collapse-content">
					<table>

						<?php if(isset($telefono)){?>
							<tr>
								<td colspan="2"><h5 class="text-success"><?=$telefono;?></h5></td>
							</tr>
						<?php }?>
						<?php if(isset($edad) || $edad != 0){?>
							<tr>
								<th >Edad :</th>
								<td><?=$edad;?></td>
							</tr>
						<?php }?>
						<?php if(isset($DNI)){?>
							<tr>
								<th>DNI :</th>
								<td><?=$DNI;?></td>
							</tr>
						<?php }?>
					</table>
				</div>
			</div>

				
			<a href="#"><?=$email?></a>
		</div>
	</div>

</div>

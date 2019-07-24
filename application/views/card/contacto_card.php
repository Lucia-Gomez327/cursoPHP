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
		<div class="collapse " id="info<?=$id?>">
			<div class="row text-center">
				
				<?php if($fechaN != 0){?>
					<div class="col d-">
						Fecha de Nacimiento :  <?=$fechaN;?>
					</div>

				<?php }?>
				<?php if($DNI != 0){?>
					<div class="col d-inline ">
						DNI : <?=$DNI;?>
					</div>
				<?php }?>
			</div>
		</div>
	</div>


</div>



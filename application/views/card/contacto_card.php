<div class="list-group-item list-group-item-action flex-column align-items-start ">

	<div class=" card promoting-card  d-flex w-100 justify-content-between">
		<div class="card-body d-flex flex-row">
			
			<img width="160px" src="<?= $foto;?>" class="img-fluid z-depth-1 rounded-circle" alt="">

			<div class="card-body">
				<h2><?=$nombre;?>
				<?php if(isset($apellido)){echo " ".$apellido; };?></h2>
				<div class="collapse-content">
					<table>

						<?php if(isset($edad)){?>
							<tr>
								<th >Edad :</th>
								<td><?=$edad;?></td>
							</tr>
						<?php }?>
						<?php if(isset($telefono)){?>
							<tr>
								<th>Tel :</th>
								<td><?=$telefono;?></td>
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

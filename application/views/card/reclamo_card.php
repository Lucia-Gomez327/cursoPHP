<div name="Reclamo_Card"   id="R_<?php echo $id;?>" data-toggle="collapse" data-target="#info<?php echo $id;?>"  class="list-group-item list-group-item-action flex-column align-items-start " style="background: url('<?php echo base_url();?>images/Back/white3.png'); background-size: 100%;border-radius: 9px">
	
	<div class=" card promoting-card  d-flex w-100 justify-content-between border border-warning" style="background: url('<?php echo base_url();?>images/Back/white3.png')">
		<!-- CHECKBOX ELIMINACION -->
		<div name="cb_eliminar" class="col-md-2 d-none position-absolute float-right " >
			<input type="checkbox" class="form-control " >
		</div>
		
		<div class="card-body d-flex flex-row " >		
			<!------------ CARD BODY ------------>
			<div class="card-body">
				<!-- ↓ ID -->
				<div id="id" class="d-none"><?php echo $id?></div>
				<h3 class="text-warning">Reclamo <?php echo $id;?></h3>
				<div  class="collapse-content">
					<h4 class="text-secondary"><?php echo $contenido?></h4>
				</div>
			</div>

		</div>
		<!-- INFO -->
		<div class="collapse " name="info" id="info<?php echo $id?>">
			<button id="eliminar.<?php echo $id?>" class="btn btn-md btn-danger  float-right" onclick="Eliminar(this)">
				<i class="fas fa-backspace"></i>
			</button>
		</div>
	</div>
</div>

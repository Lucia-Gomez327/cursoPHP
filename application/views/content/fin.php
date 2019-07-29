			</div>
		</div>
		<script>
			
			$('#btn_modal').click(function(){
				$('#form')[0].reset();
				$('#f_button').html('AGENDAR');
				cambiarAction('agregar');
			});

//Cambia el action del form principal
			function cambiarAction(funcion){
				action = $('#form').attr('action').split('/');
				action[action.length-1] = funcion;
				$('#form').attr('action',action.join('/'));
			}


			function Editar(btn){
				//↓ Id del boton editar del contacto
				btn_id = $(btn).attr('id').split('.')[1];
				//↓ Identificar del contacto para JQUERY
				contacto = "#C_"+btn_id;
				nombre   = $(contacto +' #nombre').html();
				apellido = $(contacto +' #apellido').html();
				DNI      = $(contacto +' #DNI').html();
				fechaN   = $(contacto +' #fechaN').html();
				email    = $(contacto +' #email').html();
				telefono = $(contacto +' #telefono').html();

				$('#f_id').val(btn_id);
				$('#f_nombre').val(nombre);
				$('#f_apellido').val(apellido);
				$('#f_DNI').val(DNI);
				$('#f_fechaN').val(fechaN);
				$('#f_email').val(email);
				$('#f_telefono').val(telefono);
				$('#f_button').html('EDITAR');
				cambiarAction('modificar');
			}
		</script>
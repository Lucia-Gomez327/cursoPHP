<script>

	$("#f_agregar").onclick(function(event){
		alert("funciona");
		var nombre= $("#f_nombre").val();
		var apellido= $("#f_apellido").val();
		var DNI=$("#f_DNI").val();
		var fechaN= $("#f_fechaN").val();
		var email= $("#f_email").val();
		var telefono= $("#f_telefono").val();

		var e = 0;
		var p = 0;

		var fechaActual = new Date();
		fechaActual.setHours(0,0,0,0);

		var ex_num = "/[[^0-9]/";
		//nombre o telefono
		if(nombre.val() == " " || telefono.val() == " " || !ex_num.test(telefono))
		{
			$(f_nombre).addClass('border-danger');
			$(f_telefono).addClass('border-danger');
		}
		else{
			$(f_nombre).removeClass('border-danger'); 
			$(f_telefono).removeClass('border-danger');
			//DNI
			if(!ex_num.test(DNI)){
				$(f_DNI).addClass('border-danger');
			}
			else{
				$(f_DNI).removeClass('border-danger');
				//email
				if (!/^\w.{3,20}@.{3,}\..+/.test(email.val())) {
					$(f_email).addClass('border-danger');
				} else {
					$(f_email).removeClass('border-danger'); 
					e =true;

					//fecha
					if(fechaN > fechaActual)
					{
						$(f_fechaN).addClass('border-danger');
					}
					else{
						$(f_fechaN).remuveClass('border-danger');
					}
				}				
			}
		}
		if(!e || !p){
			event.preventDefault();
		}



	});



	

</script>
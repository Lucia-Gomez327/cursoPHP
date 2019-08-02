
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

};

$("#f_agendar").click(function(event){
	
	
	var nombre= $("#f_nombre").val();
	var apellido= $("#f_apellido").val();
	var DNI=$("#f_DNI").val();
	var fechaN= $("#f_fechaN").val();
	var email= $("#f_email").val();
	var telefono= $("#f_telefono").val();

	
	if(!nombre_tel(nombre,telefono) || !v_email(email))
	{
		event.preventDefault();
	}
	//v_email(email);
	v_fecha(fechaN);
	v_DNI(DNI);

});

function nombre_tel(nombre,telefono){
	
	var ex_num =new RegExp(/[^0-9]/);

	//nombre
	if(nombre.length<=0)
	{
		$(f_nombre).addClass('border-danger');
		return false;
	}
	else{
		$(f_nombre).removeClass('border-danger');+
		return true;
	}

	//telefono
	if (telefono.length<=0 || ex_num.test(telefono)) {
		$(f_telefono).addClass('border-danger');
		return false;
	}
	else{
		$(f_telefono).removeClass('border-danger');
		return true;
	}
};

function v_fecha(fechaN)
{
	var hoy = new Date();
	dia = hoy.getDate(); 
	mes = hoy.getMonth() + 01;
	anio= hoy.getFullYear();
	fecha_actual = String(anio+"-0"+mes+"-0"+dia);

	if(fechaN > fecha_actual)
	{
		$(f_fechaN).addClass('border-danger');
		return false;
	}
	else{
		$(f_fechaN).removeClass('border-danger');
		return true;
	}

<<<<<<< HEAD

};

function v_email(email)
{
	var exEmail = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

	if(email.length>0){

		if(!exEmail.test(email))
		{
			$(f_email).addClass('border-danger');
		}
		else{	
			$(f_email).removeClass('border-danger');
		}
	}
	else{
		$(f_email).removeClass('border-danger');
	}


};


function v_DNI(DNI)
{
	var exNum = /^[0-9]+$/;

//DNI
if(DNI.length>0){

	if(!exNum.test(DNI))
	{
		$(f_DNI).addClass('border-danger');
	}
	else{
		$(f_DNI).removeClass('border-danger');
	}
}
else{
	$(f_DNI).removeClass('border-danger');
}

};
=======
function validar(){
	alert(nombre);
	var nombre= $("f_nombre").val();
	var apellido= $("f_apellido").val();
	var DNI=$("f_DNI").val();
	var fechaN= $("f_fechaN").val();
	var email= $("f_email").val();
	var telefono= $("f_telefono").val();
}

$('#eliminar_usuarios').click(function(){
	//mostrar checkbox
	$('div[name=cb_eliminar]').toggleClass('d-none');
	
	if($('div[name=Contacto_Card]').attr('data-toggle')){
		$('div[name=Contacto_Card]').removeAttr('data-toggle');
		alert("Modo Eliminar");
	}else{
		$('div[name=Contacto_Card]').attr('data-toggle','collapse');
		alert("Modo Normal");
	}
	$("div[name=info]").collapse("hide");
	//$('#Contacto_Card').attr('data-toggle', 'modal');
});
>>>>>>> 75cab616177d0270430467c8d89fc14748410716



</script>

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
		$('#f_button').html('EDITAR');
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
	
	cambiarAction('modificar');

};
function Eliminar(btn){
	btn_id = $(btn).attr('id').split('.')[1];
	contacto = "#C_"+btn_id;
	nombreContacto = $(contacto +' #nombre').html();
	if(confirm("Desea eliminar a "+ nombreContacto+"?")){
		window.location.replace("<?php echo base_url();?>AgendaContactos/baja/"+btn_id);
	}
}

function EliminarReclamo(btn){
	btn_id = $(btn).attr('id').split('.')[1];
	if(confirm("Desea eliminar su reclamo?")){
		window.location.replace("<?php echo base_url();?>AgendaContactos/bajaReclamo/"+btn_id);
	}
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


function Reclamos(){
	window.location.replace("<?php echo base_url();?>AgendaContactos/reclamos");
}


function Inicio(){
	window.location.replace("<?php echo base_url();?>AgendaContactos/inicio");
}


function quitarSugerencias(){
	$('#bReclamos #btn_sugerencias').addClass('invisible');
}




//VALIDAR AGENDAR
$("#btn_agendar").click(function(event){

	var nombre= $("#f_nombre").val();
	var apellido= $("#f_apellido").val();
	var DNI=$("#f_DNI").val();
	var fechaN= $("#f_fechaN").val();
	var email= $("#f_email").val();
	var telefono= $("#f_telefono").val();



	if(!vNombre(nombre) || !vFechaN(fechaN)|| !vDNI(DNI) || !vTelefono(telefono) || !vEmail(email))
	{
		event.preventDefault();
	}
});

function vNombre(nombre){

	if(nombre.length<=0)
	{
		$(f_nombre).addClass('border-danger');
		alert('no hay nombre');
		return false;
	}
	else{
		$(f_nombre).removeClass('border-danger');
		return true;
	}

	
};

function vTelefono(telefono){
	var ex_num =new RegExp(/([^0-9])/);

	if (telefono.length<=0 || ex_num.test(telefono)) {
		$(f_telefono).addClass('border-danger');
		alert('telefono');
		return false;
	}
	else{
		$(f_telefono).removeClass('border-danger');
		return true;
	}


};



function vFechaN(fechaN)
{
	var hoy = new Date();
	dia = hoy.getDate(); 
	mes = hoy.getMonth() + 01;
	anio= hoy.getFullYear();
	fecha_actual = String(anio+"-0"+mes+"-0"+dia);

	if(fechaN > fecha_actual)
	{
		$(f_fechaN).addClass('border-danger');

		alert('fecha erronea');
		return false;
	}
	else{
		$(f_fechaN).removeClass('border-danger');
		return true;
	}

};

function vEmail(email)
{
	var exEmail = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

	if(email.length!= ''  && !exEmail.test(email)){
		$(f_email).addClass('border-danger');
		return false;
	}else{	
		$(f_email).removeClass('border-danger');
		return true;
	}
}


function vDNI(DNI)
{
	var exNum = /^[0-9]+$/;
	if(DNI.length>0 && !exNum.test(DNI)){
		$(f_DNI).addClass('border-danger');
		alert('dni erroneo');
		return false;
	}else{
		$(f_DNI).removeClass('border-danger');
		return true;
	}
}

function Buscar(busqueda){
	$.ajax({
	    // En data puedes utilizar un objeto JSON, un array o un query string
	    data: {"parametro1" : "valor1", "parametro2" : "valor2"},
	    //Cambiar a type: POST si necesario
	    type: "GET",
	    // Formato de datos que se espera en la respuesta
	    dataType: "json",
	    // URL a la que se enviará la solicitud Ajax
	    url: "<?php echo base_url();?>AgendaContactos/",
})
	.done(function( data, ) {
		if ( console && console.log ) {
			console.log( "La solicitud se ha completado correctamente." );
		}
	})
	.fail(function( jqXHR, textStatus, errorThrown ) {
		if ( console && console.log ) {
			console.log( "La solicitud a fallado: " +  textStatus);
		}
	});
}



</script>
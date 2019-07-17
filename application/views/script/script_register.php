<script>

	$("#login").click(function (){
		window.location.replace("<?= base_url();?>User/loin");		
	})
	
	$("#registrar").click(function(){
		window.location.replace("<?= base_url();?>User/register");
	})

	$("#ingresar").click(function() {

		var user = $("#user");
		var passw = $("#passw");
		var u = 0;
		var p = 0;
		
		if (!/^\w.{2,19}/.test(user.val())) {
			$(user).addClass('border-danger')
		} else {
			$(user).removeClass('border-danger'); 
			u =true;
		}
		
		if (!/.{3,}/.test(passw.val())) {
			$(passw).addClass('border-danger');
		}else{
			$(passw).removeClass('border-danger');  
			p = true;
		}
		
		if(!u || !p){
			event.preventDefault();
		}
		
	})


</script>	
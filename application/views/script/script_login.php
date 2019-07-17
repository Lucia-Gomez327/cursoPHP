<script>
 $("#ingresar").click(function(event) {
       
		var email= $("#email");
		var passw = $("#passw");
		var e = 0;
		var p = 0;
		
		if (!/^\w.{3,20}@.{3,}\..+/.test(email.val())) {
			$(email).addClass('border-danger')
		} else {
			$(email).removeClass('border-danger'); 
			e =true;
		}
		
		if (!/.{3,}/.test(passw.val())) {
			$(passw).addClass('border-danger');
		}else{
			$(passw).removeClass('border-danger');  
			p = true;
		}
		
		if(!e || !p){
			event.preventDefault();
		}
});
</script>

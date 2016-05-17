focco = {
	loginFormPost: function(){

		$("#form-login").submit(function(e){

			e.preventDefault();		
			login = $("input#login", $(this)).val();
			senha = $("input#senha", $(this)).val();

			$.ajax({
				url: "/dashboard/autenticar.php/",				
				type: "post",								
				data: {login, senha},
				error: function(data){},
				success: function(data){					
					if (JSON.parse(data) == "nope") $("#form-erro").html("O usuário não foi autenticado");						
					else window.location = "/dashboard";
				}
				
			});
			
	
		});

	}

};
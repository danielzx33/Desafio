$(document).ready(function(){
		/*validacao pagina de cadastro*/
        $('#cadastro').click(function(){

		          var campo_vazio = false;
		          if( $('#login_usuario').val() == ''){
		            $('#login_usuario').css({"border": "2px solid red"});
		            $('#login_usuario').attr("placeholder", "Este campo não pode ser vazio");
		            campo_vazio = true;
		      }else{
		      	$('#login_usuario').css({"border": "none"});
		            $('#login_usuario').attr("placeholder", "");
		      }

		       if( $('#email_usuario').val() == ''){
		            $('#email_usuario').css({"border": "2px solid red"});
		            $('#email_usuario').attr("placeholder", "Este campo não pode ser vazio");
		            campo_vazio = true;
		      }else{
		      	$('#email_usuario').css({"border": "none"});
		            $('#email_usuario').attr("placeholder", "");
		      }

		       if( $('#senha_usuario').val() == ''){
		            $('#senha_usuario').css({"border": "2px solid red"});
		            $('#senha_usuario').attr("placeholder", "Este campo não pode ser vazio");
		            campo_vazio = true;
		      }else{
		      	$('#senha_usuario').css({"border": "none"});
		            $('#senha_usuario').attr("placeholder", "");
		      }

		      if (campo_vazio) {
		        return false;
		      }

    });
        	/*validação login*/
        $('#logar').click(function(){

		          var campo_vazio = false;
		          if( $('#input_login').val() == ''){
		            $('#input_login').css({"border": "2px solid red"});
		            $('#input_login').attr("placeholder", "Este campo não pode ser vazio");
		            campo_vazio = true;
		      }else{
		      	$('#input_login').css({"border": "none"});
		            $('#input_login').attr("placeholder", "");
		      }

		       if( $('#input_senha').val() == ''){
		            $('#input_senha').css({"border": "2px solid red"});
		            $('#input_senha').attr("placeholder", "Este campo não pode ser vazio");
		            campo_vazio = true;
		      }else{
		      	$('#input_senha').css({"border": "none"});
		            $('#input_senha').attr("placeholder", "");
		      }

		      if (campo_vazio) {
		        return false;
		      }

    });

        /*validacao insert*/
        $('#anuncio').click(function(){

		          var campo_vazio = false;
		          if($('#produto_nome').val() == ''){
		            $('#produto_nome').css({"border": "2px solid red"});
		            $('#produto_nome').attr("placeholder", "preencher");
		            campo_vazio = true;
		      }else{
		      	$('#produto_nome').css({"border": "none"});
		            $('#produto_nome').attr("placeholder", "");
		      }

		       if( $('#produto_tipo').val() == ''){
		            $('#produto_tipo').css({"border": "2px solid red"});
		            $('#produto_tipo').attr("placeholder", "preencher");
		            campo_vazio = true;
		      }else{
		      	$('#produto_tipo').css({"border": "none"});
		            $('#produto_tipo').attr("placeholder", "");
		      }

		       if( $('#produto_quantidade').val() == ''){
		            $('#produto_quantidade').css({"border": "2px solid red"});
		            $('#produto_quantidade').attr("placeholder", "preencher");
		            campo_vazio = true;
		      }else{
		      	$('#produto_quantidade').css({"border": "none"});
		            $('#produto_quantidade').attr("placeholder", "");
		      }

		      if( $('#produto_preco').val() == ''){
		        $('#produto_preco').css({"border": "2px solid red"});
		        $('#produto_preco').attr("placeholder", "preencher");
		            campo_vazio = true;
		      }else{
		      	$('#produto_preco').css({"border": "none"});
		        $('#produto_preco').attr("placeholder", "");
		      }

		      if( $('#produto_operacao').val() == ''){
		        $('#produto_operacao').css({"border": "2px solid red"});
		            campo_vazio = true;
		      }else{
		      	$('#produto_operacao').css({"border": "none"});
		      }

		      if(isNaN($('#produto_preco').val().replace(",","")) ){
		      	 $('#produto_preco').css({"border": "2px solid red"});
		      	 $('#produto_preco').val("");
		         $('#produto_preco').attr("placeholder", "deve ser um número");
		         campo_vazio = true;
		      }
		      if(  isNaN( $('#produto_quantidade').val()  )){
		      	 $('#produto_quantidade').css({"border": "2px solid red"});
		      	 $('#produto_quantidade').val("");
		         $('#produto_quantidade').attr("placeholder", "deve ser um número");
		         campo_vazio = true;
		      }

		      if (campo_vazio) {
		        return false;
		      }

    });



      });

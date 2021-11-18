<?php
        if(!session_id())
{
    session_start();
}

//calendario reset
if(isset($_SESSION['nascPass'])){$_SESSION['nascPass'] = "";}
if(isset($_SESSION['nascMot'])){$_SESSION['nascMot'] = "";}
if(isset($_SESSION['estado'])){$_SESSION['estado'] = "";}
?>

<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs
	/materialize/1.0.0/css/materialize.min.css">
	
	
	<title>Surreal Viagens</title>
	
	<!-- nome/ cidade/ estado/ nascimento/ cpf/ obs -->
	</head>

	<body>
	<br>
	<a class="btn tooltipped" href="cadPassMain.php"><b><</b></a>
		<h1>Cadastro de Passageiro</h1>
		
		  <div class="row"> 
    <form class="col s12" name="formCadUser" method="POST" action="cadPassAuth.php">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Nome Completo" id="nome_user" type="text" class="validate" name="username">
          <label for="nome_user">Nome</label>
        </div>
		<div class="input-field col s3">
			<input placeholder="ex: 62633368972" id="cpf_user" data-length="11" type="text" class="validate" name="usercpf">
			<label for="cpf_user">CPF</label>
		</div>
		<div class="input-field col s2">
	<?php
		include '../inputcalendario.php'; //utiliza informações externas pegas de um input de DateTime;
		//obj de não colocar aqui: reduz memória, pois esse mesmo input pode ser usado em outros códigos;
	?>
		
		<label for="datepicker">Data de Nascimento</label>
		</div></div>
		<div class="row">
        <div class="input-field col s6">
		  <input name="usercity" placeholder="ex: Sorocaba, Votorantim, etc..." id="cidade" type="text" class="validate">
          <label for="cidade">Cidade</label>
        </div>
      
	  
	  <!---->
	  
		<div class="col s2">
            <label>Estado</label>
			
	<?php
		include '../inputestado.php'; //utiliza informações externas pegas de um select de Estado;
		//obj de não colocar aqui: reduz memória, pois esse mesmo input pode ser usado em outros códigos;
	?>
		
       </div></div>
	   <!--Enviar-->
	   <div class="right-align" style="margin-right:50px;"><input type="submit" value="Enviar" class="btn"></div>
		<!---->
	  <div class="row">
        <div class="input-field col s8">
		<div class="card-panel grey lighten-2">
		<h3>Observações:</h3>
          <textarea id="textarea1" class="materialize-textarea" name="userobs" data-length="1000"></textarea>
        </div></div>
      </div>
	   </div>
	  
	<br><br>
 </div>
	
    </form>
  </div>
  
    
   
		
	<!-- Compiled and minified JQuery -->
<script src="jquery-3.4.1.min.js"></script>
<!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/
	js/materialize.min.js"></script>
	
	<script>
	document.addEventListener('DOMContentLoaded', function () {
            var textNeedCount = document.querySelectorAll('#cpf_user, #textarea1');
            M.CharacterCounter.init(textNeedCount);
	});
	</script>

	</body>
</html>
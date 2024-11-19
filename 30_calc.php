<!DOCTYPE html>
<html>
<head>
	<title>Calculadora orientada a objetos</title>
	
	<!-- Framework materialize -->
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      
<head>
 <div class="row">
 
	<!-- Formulário calculadora -->
	<form class="col s12" action="30_calcA.php" method="POST">
	
		<!-- Valor 1 -->
		<div class="row">
			<div class="input-field col s6">
				<label for="num_1">Valor 1:</label>
				<input type="text" name="num1" id="num_1"> </br>
			</div>
		</div>
		
		
		<!-- Valor 2 -->
		<div class="row">
			<div class="input-field col s6">
				<label for="num_2">Valor 2:</label>
				<input type="text" name="num2" id="num_2"> </br></br>
			</div>
		</div>
		
		<!-- Operador -->
		<div class="row">
			<div class="input-field col s16">									  
				<select name="operador" id="operador_id" class="waves-effect waves-light "> 
					<option value="" disabled="" selected="">Escolha o operador:</option>
					<option value="somar">Somar</option>
					<option value="subtrair">Subtrair</option>
					<option value="multiplicar">Multiplicar</option>
				</select>
				
			</div>
		
			<div class="input-field col s16">
				<!-- Botão de submissão dos dados -->
				<input class="btn waves-effect waves-light" type="submit" value="Calcula">
			</div>
		</div>
	</form>
</div>
</html>

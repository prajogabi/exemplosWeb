<?php 



//Conexão
include_once '28dbconnect.php';

//Header
include_once '28crud_header.php';


//Mensagem
include_once '28mensagem.php';
?>


<div class="row">

	<div class="input-field col s6 push-m3 ">
		<h3 class="light"> Clientes  </h3>
	</div>
</div>

<div class="row">
<form action="28crud_index_consulta.php" method="POST">
	<div class="input-field col s5 push-m3 ">
		
		  <i class="material-icons prefix">search</i>
		  <input id="icon_search" type="text" name="consultanome" class="validate">
		  <label for="icon_search">Consulta nome:</label>	
	</div>
	<div class="input-field col s5 push-m3 ">
		  <button class="btn waves-effect waves-light" type="submit" name="action">Consultar
			<i class="material-icons right">send</i>
		  </button>
					  
	</div>
</form>
</div>

<div class="row">
	<div class="col s12 m6 push-m3 ">
	
	<table class="striped">
		<thead>
			<tr>
				<th>Nome:</th>
				<th>Sobrenome:</th>
				<th>Email:</th>
				<th>Idade:</th>
			</tr>
		</thead>
		
		<tbody>
			<?php
			$consultanome="";
			
			
			if(! empty($_POST['consultanome'])):
				//caixa de consulta = preenchida				
				$consultanome= " where nome like '%" . $_POST['consultanome'] . "%'";			
			endif;
			
			
			
			$sql="SELECT * FROM clientes " . $consultanome;
			
			
			$resultado= mysqli_query($connect,$sql);
			
			if (mysqli_num_rows($resultado)>0):
			
			while($dados =mysqli_fetch_array($resultado)):	
			?>
			<tr>
				<td><?php echo $dados['nome'];?></td>
				<td><?php echo $dados['sobrenome'];?></td>
				<td><?php echo $dados['email'];?></td>
				<td><?php echo $dados['idade'];?></td>
				<td><a href="28crud_editar.php?id=<?php echo $dados['id'];?>" class="btn-floating orange"><i class="material-icons">edit</i></a> </td>
				
				<td><a href="#modal<?php echo $dados['id'];?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a> </td>
				
				
				
				<!-- Modal Structure deletar -->
				  <div id="modal<?php echo $dados['id'];?>" class="modal">
					<div class="modal-content">
					  <h3>Atenção!</h3>
					  <p>Deseja excluir esse cliente?</p>
					</div>
					<div class="modal-footer">
					  
					  <form action="28crud_delete.php" method="POST">
						<input type="hidden" name="id" value="<?php echo $dados['id'];?>">
						<button type="submit" name="btn-deletar" class="btn red">Sim, quero deletar</button>
						<a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
					  
					  </form>
					  
					</div>
				  </div>
				  
				  
				 
				  
			</tr>
			<?php 
			endwhile; 
			else: ?>
				<tr>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
				</tr>
				
				
				
			<?php
			endif;
			?>
			
			
		</tbody>
	</table>
	<br>
	<a href="28crud_adicionarclientes.php" class="btn"> Adicionar cliente</a>
	</div>
</div>


<?php include_once '28crud_footer.php';?>

     
 

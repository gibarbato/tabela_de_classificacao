<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Cadastro de jogadores</title>
		<link rel="stylesheet" type="text/css" href="">
		<style>
			select {
				width: 100%;
				padding: 16px 20px;
				border: none;
				border-radius: 4px;
				background-color: #f1f1f1;
					}
			input[type=button], input[type=submit], input[type=reset] {
				background-color: #4CAF10;
				border: none;
				color: white;
				padding: 6px 20px;
				text-decoration: none;
				margin: 4px 2px;
				cursor: pointer;
					}
			h2 {
				background-color: green;
			}
			
			div {
				background-color: lightblue;
			}
			
			p {
				background-color: yellow;
			}
					
		</style>
		
	</head>
	<body>
		<div>
		<h2>LISTA DE JOGADORES</H2>
		<form method="get" action="ListaJogadores.php">
			<table  border="1">
				<tr>
					<th><label>Jogadores</label></th>
				</tr>
				<tr>
					<td><input type="radio" name="pesq" value="sim" checked> Mensalistas
						<input type="radio" name="pesq" value="nao"> Não mensalistas
						<input type="radio" name="pesq" value="todos"> Todos</td>
				</tr>
			</table>		
					<input type="submit" value="Lista de Jogadores">
		</form>
		</div>

		
		<h2>CADASTRO DE JOGADORES</H2>
		
		<form method="get" action="cadastro.php">
			<table  border="1">
				<tr>
					<th><label>Nome:</label></th>
					<th><label>Apelido:</label></th>
					<th><label>Mensalista</label></th>
				</tr>
				<tr>
					<td><input type="TEXT" name="nome" placeholder="Informe o nome do jogador" /><br></td>
					<td><input type="TEXT" name="apelido" placeholder="Informe o apelido do jogador" /><br></td>
					<td><input type="radio" name="situacao" value="sim" checked> Sim
								<input type="radio" name="situacao" value="nao"> Não</td>	
				</tr>
			</table>		
					<input type="submit" value="Enviar cadastro">
				
			
		</form>	
				
		<div>
		<h2>EDITAR JOGADORES</H2>	
				<form method="get" action="cadastrojogadores.php"> 
			<table  border="1">
				<tr>
					<th><label>Selecione o jogador:</label></th>
				</tr>
				<tr>
				<td>
		<?php
		
        /*conexão banco de dados via PDO*/
        try
        {
            $connection = new PDO("mysql:host=localhost;dbname=tdm_bd","root","");
            $connection->exec("set names utf8");
        }
        
        catch(PDOException $e)
        {
            echo "Falha: ". $e->getMessage();
            exit();
        }
		
				echo "<select name = 'nome'>";
				echo "<option value = ''>Selecione<//td/option></br>";
				$sql = 'select id, nome, apelido from jogador order by nome';
				foreach($connection->query($sql)as $row){
				echo "<option value = ".$row['nome'].">".$row['nome'] . "<//td/option></br>";
        		}
				echo "</select>";

		?>
				
				
				</td>
				</tr>
			</table>
			
			<input type="submit" value="JOGADOR">
				
		</form>

		<form method="get" action="EditaJogadores.php" >
				<?php
				$nome=$_GET['nome'];
				?>
				<?php
					$rs = $connection->prepare("select * from jogador where nome ='$nome'order by nome"); /*where situacao like "sim"*/
         
         if($rs-> execute())
         {
             while($registro = $rs->fetch(PDO::FETCH_OBJ))
                {
                    echo "<tr>";
                    echo "<td><input type='TEXT' name='edtnome' placeholder='Informe o nome do jogador' value=$registro->nome></td>";
                    echo "<td><input type='TEXT' name='edtapelido' placeholder='Informe o nome do jogador' value=$registro->apelido></td>";
                    echo "<td><input type='TEXT' name='edtsituacao' placeholder='Informe o nome do jogador' value=$registro->situacao></td>";
                    echo "</tr>";
                }
         echo "<input type='hidden' name='nome1' value='$nome'>";
         }
         else
         {
            echo "Falha na seleção de registros.<br>";    
         }
		 
				?>
			
			<input type="submit" value="EDITAR JOGADOR">
				
				
		</form>		
				
		</div>		
		
		
		<h2>INCLUSÃO DE RESULTADOS</H2>
					<input name="resultado" type="button" onClick="window.open('inserir_resultado.php')" value="Inclusão de Resultado">
					</br>
					
		
		<h2>TABELA DE CLASSIFICAÇÃO</H2>
		
		<form method="get" action="classificacao2.php">
			<table  border="1">
				<tr>
					<th><label>Data Inicial:</label></th>
					<th><label>Data Final:</label></th>
				</tr>
				<tr>
					<td><input type="date" name="dti" value= "today"></td>
					<td><input type="date" name="dtf" value= "today"></td>
				</tr>
			</table>		
					<input type="submit" value="Classificação">
		</form>
		</div>		
			
			
			<div>
		<h2>COMPARAÇÕES DE RESULTADOS</H2>	
				<form method="get" action="resultados.php"> 
			<table  border="1">
				<tr>
					<th><label>Comparar jogadores:</label></th>
				</tr>
				<tr>
				<td>
		<?php
		
        /*conexão banco de dados via PDO*/
        try
        {
            $connection = new PDO("mysql:host=localhost;dbname=tdm_bd","root","");
            $connection->exec("set names utf8");
        }
        
        catch(PDOException $e)
        {
            echo "Falha: ". $e->getMessage();
            exit();
        }
				//nome 1	
				echo "<select name = 'pesquisa1'>";
				echo "<option value = ''>Selecione o 1º jogador<//td/option></br>";
				$sql = 'select id, nome, apelido from jogador order by nome';
				foreach($connection->query($sql)as $row){
				echo "<option value = ".$row['nome'].">".$row['nome'] . "<//td/option></br>";
        		}
				echo "</select></br>";
				echo "</tr></td><td>";
				//nome 2
				echo "<select name = 'pesquisa2'>";
				echo "<option value = ''>Selecione o 2º jogador<//td/option></br>";
				$sql = 'select id, nome, apelido from jogador order by nome';
				foreach($connection->query($sql)as $row){
				echo "<option value = ".$row['nome'].">".$row['nome'] . "<//td/option></br>";
        		}
				echo "</select></br>";
		?>
			<table  border="1">
				<tr>
					<th><label>Data Inicial:</label></th>
					<th><label>Data Final:</label></th>
				</tr>
				<tr>
					<td><input type="date" name="dtri" value= "today"></td>
					<td><input type="date" name="dtrf" value= "today"></td>
				</tr>
			</table>	
				
				</td>
				</tr>
			</table>
			
			<input type="submit" value="RESULTADOS">
				
		</form>
			</div>
	
	<br>
</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Inserção de resultados</title>
		<link rel="stylesheet" type="text/css" href="_css/estilo.css">
		<?php
            
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
         ?>
	</head>
	<body>
		
		<form method="get" action="tdm_resultados.php">
			<label>Data do jogo:</label><input type="date" name="dt" value= "today">
			<table  border=1>
				<tr>
					<th><label>Nome:</label></th><th><label>Confirmação do Jogo</label></th><th><label>Confirmação do Rango</label></th><th><label>Presença no Jogo</label></th><th><label>Time</label></th><th><label>Gols a favor</label></th><th><label>Gols contra</label></th></tr>
						<tr><td>
						<?php
								echo "<select name = 'j1'>";
								echo "<option value = ''>Selecione<//td/option></br>";
								$sql = 'select id, nome from jogador where situacao like "sim" order by nome';
								foreach($connection->query($sql)as $row){
            
								echo "<option value = ".$row['nome'].">".$row['nome'] . "<//td/option></br>";
            
						}
								echo "</select>";
      
								//$connection = null;
						?></td>
						
							<td><input type="checkbox" name="cj1" value= "sim" checked>Sim</td>	
							<td><input type="checkbox" name="cr1" value= "sim" checked>Sim</td>	
							<td><input type="checkbox" name="pj1" value= "sim" checked>Sim</td>	
							<td><input type="radio" name="t1" value="A" checked> Time A
								<input type="radio" name="t1" value="B"> Time B</td>
							<td><input type="number" name="gf1" min="0" max="20" value="0"/></td>
							<td><input type="number" name="gc1" min="0" max="20" value="0"/></td>
						</tr>
						<tr><td>
						<?php
								echo "<select name = 'j2'>";
								echo "<option value = ''>Selecione<//td/option></br>";
								$sql = 'select id, nome from jogador where situacao like "sim" order by nome';
								foreach($connection->query($sql)as $row){
            
								echo "<option value = ".$row['nome'].">".$row['nome'] . "<//td/option></br>";
            
						}
								echo "</select>";
      
								//$connection = null;
						?></td>
							<td><input type="checkbox" name="cj2" value= "sim" checked>Sim</td>	
							<td><input type="checkbox" name="cr2" value= "sim" checked>Sim</td>	
							<td><input type="checkbox" name="pj2" value= "sim" checked>Sim</td>	
							<td><input type="radio" name="t2" value="A" checked> Time A
								<input type="radio" name="t2" value="B"> Time B</td>
							<td><input type="number" name="gf2" min="0" max="20" value="0"/></td>
							<td><input type="number" name="gc2" min="0" max="20" value="0"/></td>
						</tr>
						<tr><td>
						<?php
								echo "<select name = 'j3'>";
								echo "<option value = ''>Selecione<//td/option></br>";
								$sql = 'select id, nome from jogador where situacao like "sim" order by nome';
								foreach($connection->query($sql)as $row){
            
								echo "<option value = ".$row['nome'].">".$row['nome'] . "<//td/option></br>";
            
						}
								echo "</select>";
      
								//$connection = null;
						?></td>
							<td><input type="checkbox" name="cj3" value= "sim" checked>Sim</td>	
							<td><input type="checkbox" name="cr3" value= "sim" checked>Sim</td>	
							<td><input type="checkbox" name="pj3" value= "sim" checked>Sim</td>	
							<td><input type="radio" name="t3" value="A" checked> Time A
								<input type="radio" name="t3" value="B"> Time B</td>
							<td><input type="number" name="gf3" min="0" max="20" value="0"/></td>
							<td><input type="number" name="gc3" min="0" max="20" value="0"/></td>
						</tr>
						<tr><td>
						<?php
								echo "<select name = 'j4'>";
								echo "<option value = ''>Selecione<//td/option></br>";
								$sql = 'select id, nome from jogador where situacao like "sim" order by nome';
								foreach($connection->query($sql)as $row){
								
								echo "<option value = ".$row['nome'].">".$row['nome'] . "<//td/option></br>";
            
						}
								echo "</select>";
      
						?></td>
							<td><input type="checkbox" name="cj4" value= "sim" checked>Sim</td>	
							<td><input type="checkbox" name="cr4" value= "sim" checked>Sim</td>	
							<td><input type="checkbox" name="pj4" value= "sim" checked>Sim</td>	
							<td><input type="radio" name="t4" value="A" checked> Time A
								<input type="radio" name="t4" value="B"> Time B</td>
							<td><input type="number" name="gf4" min="0" max="20" value="0"/></td>
							<td><input type="number" name="gc4" min="0" max="20" value="0"/></td>
						</tr>
						<tr><td>
						<?php
								echo "<select name = 'j5'>";
								echo "<option value = ''>Selecione<//td/option></br>";
								$sql = 'select id, nome from jogador where situacao like "sim" order by nome';
								foreach($connection->query($sql)as $row){
								
								echo "<option value = ".$row['nome'].">".$row['nome'] . "<//td/option></br>";
            
						}
								echo "</select>";
      
								//$connection = null;
						?></td>
							<td><input type="checkbox" name="cj5" value= "sim" checked>Sim</td>	
							<td><input type="checkbox" name="cr5" value= "sim" checked>Sim</td>	
							<td><input type="checkbox" name="pj5" value= "sim" checked>Sim</td>	
							<td><input type="radio" name="t5" value="A" checked> Time A
								<input type="radio" name="t5" value="B"> Time B</td>
							<td><input type="number" name="gf5" min="0" max="20" value="0"/></td>
							<td><input type="number" name="gc5" min="0" max="20" value="0"/></td>
						</tr>
						<tr><td>
						<?php
								echo "<select name = 'j6'>";
								echo "<option value = ''>Selecione<//td/option></br>";
								$sql = 'select id, nome from jogador where situacao like "sim" order by nome';
								foreach($connection->query($sql)as $row){
								
								echo "<option value = ".$row['nome'].">".$row['nome'] . "<//td/option></br>";
            
						}
								echo "</select>";
      
								//$connection = null;
						?></td>
							<td><input type="checkbox" name="cj6" value= "sim" checked>Sim</td>	
							<td><input type="checkbox" name="cr6" value= "sim" checked>Sim</td>	
							<td><input type="checkbox" name="pj6" value= "sim" checked>Sim</td>	
							<td><input type="radio" name="t6" value="A" checked> Time A
								<input type="radio" name="t6" value="B"> Time B</td>
							<td><input type="number" name="gf6" min="0" max="20" value="0"/></td>
							<td><input type="number" name="gc6" min="0" max="20" value="0"/></td>
						</tr>
						<tr><td>
						<?php
								echo "<select name = 'j7'>";
								echo "<option value = ''>Selecione<//td/option></br>";
								$sql = 'select id, nome from jogador where situacao like "sim" order by nome';
								foreach($connection->query($sql)as $row){
								
								echo "<option value = ".$row['nome'].">".$row['nome'] . "<//td/option></br>";
            
						}
								echo "</select>";
      
								//$connection = null;
						?></td>
							<td><input type="checkbox" name="cj7" value= "sim" checked>Sim</td>	
							<td><input type="checkbox" name="cr7" value= "sim" checked>Sim</td>	
							<td><input type="checkbox" name="pj7" value= "sim" checked>Sim</td>	
							<td><input type="radio" name="t7" value="A" checked> Time A
								<input type="radio" name="t7" value="B"> Time B</td>
							<td><input type="number" name="gf7" min="0" max="20" value="0"/></td>
							<td><input type="number" name="gc7" min="0" max="20" value="0"/></td>
						</tr>
						<tr><td>
						<?php
								echo "<select name = 'j8'>";
								echo "<option value = ''>Selecione<//td/option></br>";
								$sql = 'select id, nome from jogador where situacao like "sim" order by nome';
								foreach($connection->query($sql)as $row){
								
								echo "<option value = ".$row['nome'].">".$row['nome'] . "<//td/option></br>";
            
						}
								echo "</select>";
      
								//$connection = null;
						?></td>
							<td><input type="checkbox" name="cj8" value= "sim" checked>Sim</td>	
							<td><input type="checkbox" name="cr8" value= "sim" checked>Sim</td>	
							<td><input type="checkbox" name="pj8" value= "sim" checked>Sim</td>	
							<td><input type="radio" name="t8" value="A" checked> Time A
								<input type="radio" name="t8" value="B"> Time B</td>
							<td><input type="number" name="gf8" min="0" max="20" value="0"/></td>
							<td><input type="number" name="gc8" min="0" max="20" value="0"/></td>
						</tr>
						<tr><td>
						<?php
								echo "<select name = 'j9'>";
								echo "<option value = ''>Selecione<//td/option></br>";
								$sql = 'select id, nome from jogador where situacao like "sim" order by nome';
								foreach($connection->query($sql)as $row){
								
								echo "<option value = ".$row['nome'].">".$row['nome'] . "<//td/option></br>";
            
						}
								echo "</select>";
      
								//$connection = null;
						?></td>
							<td><input type="checkbox" name="cj9" value= "sim" checked>Sim</td>	
							<td><input type="checkbox" name="cr9" value= "sim" checked>Sim</td>	
							<td><input type="checkbox" name="pj9" value= "sim" checked>Sim</td>	
							<td><input type="radio" name="t9" value="A" checked> Time A
								<input type="radio" name="t9" value="B"> Time B</td>
							<td><input type="number" name="gf9" min="0" max="20" value="0"/></td>
							<td><input type="number" name="gc9" min="0" max="20" value="0"/></td>
						</tr>
						<tr><td>
						<?php
								echo "<select name = 'j10'>";
								echo "<option value = ''>Selecione<//td/option></br>";
								$sql = 'select id, nome from jogador where situacao like "sim" order by nome';
								foreach($connection->query($sql)as $row){
								
								echo "<option value = ".$row['nome'].">".$row['nome'] . "<//td/option></br>";
            
						}
								echo "</select>";
      
								//$connection = null;
						?></td>
							<td><input type="checkbox" name="cj10" value= "sim" checked>Sim</td>	
							<td><input type="checkbox" name="cr10" value= "sim" checked>Sim</td>	
							<td><input type="checkbox" name="pj10" value= "sim" checked>Sim</td>	
							<td><input type="radio" name="t10" value="A" checked> Time A
								<input type="radio" name="t10" value="B"> Time B</td>
							<td><input type="number" name="gf10" min="0" max="20" value="0"/></td>
							<td><input type="number" name="gc10" min="0" max="20" value="0"/></td>
						</tr>
						<tr><td>
						<?php
								echo "<select name = 'j11'>";
								echo "<option value = ''>Selecione<//td/option></br>";
								$sql = 'select id, nome from jogador where situacao like "sim" order by nome';
								foreach($connection->query($sql)as $row){
								
								echo "<option value = ".$row['nome'].">".$row['nome'] . "<//td/option></br>";
            
						}
								echo "</select>";
      
								//$connection = null;
						?></td>
							<td><input type="checkbox" name="cj11" value= "sim" checked>Sim</td>	
							<td><input type="checkbox" name="cr11" value= "sim" checked>Sim</td>	
							<td><input type="checkbox" name="pj11" value= "sim" checked>Sim</td>	
							<td><input type="radio" name="t11" value="A" checked> Time A
								<input type="radio" name="t11" value="B"> Time B</td>
							<td><input type="number" name="gf11" min="0" max="20" value="0"/></td>
							<td><input type="number" name="gc11" min="0" max="20" value="0"/></td>
						</tr>
						<tr><td>
						<?php
								echo "<select name = 'j12'>";
								echo "<option value = ''>Selecione<//td/option></br>";
								$sql = 'select id, nome from jogador where situacao like "sim" order by nome';
								foreach($connection->query($sql)as $row){
								
								echo "<option value = ".$row['nome'].">".$row['nome'] . "<//td/option></br>";
            
						}
								echo "</select>";
      
								//$connection = null;
						?></td>
							<td><input type="checkbox" name="cj12" value= "sim" checked>Sim</td>	
							<td><input type="checkbox" name="cr12" value= "sim" checked>Sim</td>	
							<td><input type="checkbox" name="pj12" value= "sim" checked>Sim</td>	
							<td><input type="radio" name="t12" value="A" checked> Time A
								<input type="radio" name="t12" value="B"> Time B</td>
							<td><input type="number" name="gf12" min="0" max="20" value="0"/></td>
							<td><input type="number" name="gc12" min="0" max="20" value="0"/></td>
						</tr>
						<tr><td>
						<?php
								echo "<select name = 'j13'>";
								echo "<option value = ''>Selecione<//td/option></br>";
								$sql = 'select id, nome from jogador where situacao like "sim" order by nome';
								foreach($connection->query($sql)as $row){
								
								echo "<option value = ".$row['nome'].">".$row['nome'] . "<//td/option></br>";
            
						}
								echo "</select>";
      
								//$connection = null;
						?></td>
							<td><input type="checkbox" name="cj13" value= "sim" checked>Sim</td>	
							<td><input type="checkbox" name="cr13" value= "sim" checked>Sim</td>	
							<td><input type="checkbox" name="pj13" value= "sim" checked>Sim</td>	
							<td><input type="radio" name="t13" value="A" checked> Time A
								<input type="radio" name="t13" value="B"> Time B</td>
							<td><input type="number" name="gf13" min="0" max="20" value="0"/></td>
							<td><input type="number" name="gc13" min="0" max="20" value="0"/></td>
						</tr>
						<tr><td>
						<?php
								echo "<select name = 'j14'>";
								echo "<option value = ''>Selecione<//td/option></br>";
								$sql = 'select id, nome from jogador where situacao like "sim" order by nome';
								foreach($connection->query($sql)as $row){
								
								echo "<option value = ".$row['nome'].">".$row['nome'] . "<//td/option></br>";
            
						}
								echo "</select>";
      
								//$connection = null;
						?></td>
							<td><input type="checkbox" name="cj14" value= "sim" checked>Sim</td>	
							<td><input type="checkbox" name="cr14" value= "sim" checked>Sim</td>	
							<td><input type="checkbox" name="pj14" value= "sim" checked>Sim</td>	
							<td><input type="radio" name="t14" value="A" checked> Time A
								<input type="radio" name="t14" value="B"> Time B</td>
							<td><input type="number" name="gf14" min="0" max="20" value="0"/></td>
							<td><input type="number" name="gc14" min="0" max="20" value="0"/></td>
						</tr>
						<tr><td>
						<?php
								echo "<select name = 'j15'>";
								echo "<option value = ''>Selecione<//td/option></br>";
								$sql = 'select id, nome from jogador where situacao like "sim" order by nome';
								foreach($connection->query($sql)as $row){
								
								echo "<option value = ".$row['nome'].">".$row['nome'] . "<//td/option></br>";
            
						}
								echo "</select>";
      
								//$connection = null;
						?></td>
							<td><input type="checkbox" name="cj15" value= "sim" checked>Sim</td>	
							<td><input type="checkbox" name="cr15" value= "sim" checked>Sim</td>	
							<td><input type="checkbox" name="pj15" value= "sim" checked>Sim</td>	
							<td><input type="radio" name="t15" value="A" checked> Time A
								<input type="radio" name="t15" value="B"> Time B</td>
							<td><input type="number" name="gf15" min="0" max="20" value="0"/></td>
							<td><input type="number" name="gc15" min="0" max="20" value="0"/></td>
						</tr>
						
						<tr><td>
						<?php
								echo "<select name = 'j16'>";
								echo "<option value = ''>Selecione<//td/option></br>";
								$sql = 'select id, nome from jogador where situacao like "sim" order by nome';
								foreach($connection->query($sql)as $row){
								
								echo "<option value = ".$row['nome'].">".$row['nome'] . "<//td/option></br>";
            
						}
								echo "</select>";
      
								$connection = null;
						?></td>
							<td><input type="checkbox" name="cj16" value= "sim" checked>Sim</td>	
							<td><input type="checkbox" name="cr16" value= "sim" checked>Sim</td>	
							<td><input type="checkbox" name="pj16" value= "sim" checked>Sim</td>	
							<td><input type="radio" name="t16" value="A" checked> Time A
								<input type="radio" name="t16" value="B"> Time B</td>
							<td><input type="number" name="gf16" min="0" max="20" value="0"/></td>
							<td><input type="number" name="gc16" min="0" max="20" value="0"/></td>
						</tr>
			</table>		
				<input type="submit" value="Enviar resultado">
		</form>
<br>

</body>
</html>
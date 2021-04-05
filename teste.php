<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Cadastro de jogadores</title>
		<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	</head>
	<body>		
		<div>		
      
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
		
		?>
		
		<?php
		
				$edt = $_GET['editar'];
				echo $edt;
				echo"</div>";
				/*fim select*/
		 
		?>
        
		<?php
		$rs = $connection->prepare("select * from jogador where nome ='$edt'order by nome"); 
        if($rs-> execute())
         {
             while($registro = $rs->fetch(PDO::FETCH_OBJ))
                {
                    echo "<tr>";
                    echo "<td>" . $registro->id . "</td>";
                    echo "<td>" . $registro->nome . "</td>";
                    echo "<td>" . $registro->apelido . "</td>";
                    echo "<td>" . $registro->situacao . "</td>";
                    echo "<tr>";
                }
                
         }
         else
         {
            echo "Falha na seleção de registros.<br>";    
       ?>
		
		
		
        </table>
        </div>
       		
	<h2>TESTE</H2>
		
		<form method="get" action="teste.php">
			<table  border="1">
				<tr>
					<th><label>Data Inicial:</label></th>
					<th><label>Data Final:</label></th>
				</tr>
				<tr>
					<td><input type="date" name="dt1" value= "today"></td>
					<td><input type="date" name="dt2" value= "today"></td>
				</tr>
			</table>		
					<input type="submit" value="DATAS">
	
		</form>
		
		</div>
			
	<?php
	$data1 = isset($_GET["dt1"])?$_GET["dt1"]:"sim";
	$data2 = isset($_GET["dt2"])?$_GET["dt2"]:"sim"; 
	
	echo $data1;
	echo $data2;
	
	$connection = null;
	?>   
	<br>
</body>
</html>
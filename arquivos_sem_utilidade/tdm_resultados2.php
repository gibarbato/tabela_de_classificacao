<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <link rel="stylesheet" href="_css/estilo.css"/>
            <meta charset="utf-8"/>
            <title>Resultado do Jogo</title>
            <style></style>
            
        </head>
        <body>
            <div>
                <?php

        $data = isset($_GET["dt"])?$_GET["dt"]:"Data não inserido";          
            
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

         $rs = $connection->prepare('select * from jogador where situacao like "sim" order by nome');
         echo "Jogo realizado no dia $data</br>";
         
         if($rs-> execute())
         {
             while($registro = $rs->fetch(PDO::FETCH_OBJ))
                {
                    echo "<tr>";
                    echo "<td>" . $registro->id . "</td>";
                    ${no.$registro->id} = isset($_GET['j'. $registro->id])?$_GET['j'. $registro->id]:'Nome não inserido';
                    /*echo "<td>" . $registro->nome . "</td><td><input type='checkbox' name=cj".$registro->id." value= 'sim' checked>Sim</td>";
                    echo "<td><input type='checkbox' name=cr".$registro->id." value= 'sim' checked>Sim</td>";
                    echo "<td><input type='checkbox' name=pj".$registro->id." value= 'sim' checked>Sim</td>";
                    echo "<td><input type='radio' name=t".$registro->id." value='A'> Time A <input type='radio' name=t.$registro->id. value='B'> Time B</td>";
                    echo "<td><input type='number' name=gf".$registro->id." min='0' max='20' value='0'/></td>";
					echo "<td><input type='number' name=gc".$registro->id." min='0' max='20' value='0'/></td>";*/
                    echo "<tr>";                
                }
                
         }
         else
         {
            echo "Falha na seleção de registros.<br>";    
         }
            
            ?>
            
                
                
            <?php

            
                $no1 = isset($_GET["j1"])?$_GET["j1"]:"Nome não inserido";
                $cjogo1 = isset($_GET["cj1"])?$_GET["cj1"]:"nao";
                $crango1 = isset($_GET["cr1"])?$_GET["cr1"]:"nao";
                $pjogo1 = isset($_GET["pj1"])?$_GET["pj1"]:"nao";
                $time1 = isset($_GET["t1"])?$_GET["t1"]:"B";
                $golf1 = isset($_GET["gf1"])?$_GET["gf1"]:0;
                $golc1 = isset($_GET["gc1"])?$_GET["gc1"]:0;
                
                $no2 = isset($_GET["j2"])?$_GET["j2"]:"Nome não inserido";
                $cjogo2 = isset($_GET["cj2"])?$_GET["cj2"]:"nao";
                $crango2 = isset($_GET["cr2"])?$_GET["cr2"]:"nao";
                $pjogo2 = isset($_GET["pj2"])?$_GET["pj2"]:"nao";
                $time2 = isset($_GET["t2"])?$_GET["t2"]:"B";
                $golf2 = isset($_GET["gf2"])?$_GET["gf2"]:0;
                $golc2 = isset($_GET["gc2"])?$_GET["gc2"]:0;
                
                $no3 = isset($_GET["j3"])?$_GET["j3"]:"Nome não inserido";
                $cjogo3 = isset($_GET["cj3"])?$_GET["cj3"]:"nao";
                $crango3 = isset($_GET["cr3"])?$_GET["cr3"]:"nao";
                $pjogo3 = isset($_GET["pj3"])?$_GET["pj3"]:"nao";
                $time3 = isset($_GET["t3"])?$_GET["t3"]:"B";
                $golf3 = isset($_GET["gf3"])?$_GET["gf3"]:0;
                $golc3 = isset($_GET["gc3"])?$_GET["gc3"]:0;

                $no4 = isset($_GET["j4"])?$_GET["j4"]:"Nome não inserido";
                $cjogo4 = isset($_GET["cj4"])?$_GET["cj4"]:"nao";
                $crango4 = isset($_GET["cr4"])?$_GET["cr4"]:"nao";
                $pjogo4 = isset($_GET["pj4"])?$_GET["pj4"]:"nao";
                $time4 = isset($_GET["t4"])?$_GET["t4"]:"B";
                $golf4 = isset($_GET["gf4"])?$_GET["gf4"]:0;
                $golc4 = isset($_GET["gc4"])?$_GET["gc4"]:0;
                
                
                
                echo    "<table><tr><th>Jogador <th/> <th>Confirmação do Jogo <th/> <th>Confirmação do rango <th/> <th>Presença no jogo <th/>
                Time <th/><th> Gols à favor <th/><th> Gols contra <br/></th></tr>
                <tr><td>$no1 <td/> <td>$cjogo1 <td/> <td>$crango1 <td/> <td>$pjogo1 <td/> <td>$time1 <td/> <td>$golf1 <td/> <td>$golc1 <td/></tr>
                <tr><td>$no2 <td/> <td>$cjogo2 <td/> <td>$crango2 <td/> <td>$pjogo2 <td/> <td>$time2 <td/> <td>$golf2 <td/> <td>$golc2 <td/></tr>
                <tr><td>$no3 <td/> <td>$cjogo3 <td/> <td>$crango3 <td/> <td>$pjogo3 <td/> <td>$time3 <td/> <td>$golf3 <td/> <td>$golc3 <td/></tr>
                <tr><td>$no4 <td/> <td>$cjogo4 <td/> <td>$crango4 <td/> <td>$pjogo4 <td/> <td>$time4 <td/> <td>$golf4 <td/> <td>$golc4 <td/></tr></table>";
                
                		/*		<tr>
					<th><label>Nome:</label></th>
					<th><label>Apelido:</label></th>
					<th><label>Situação</label></th>
				</tr>
				<tr>
					<td><input type="TEXT" name="nome" placeholder="Informe o nome do jogador" /><br></td>
					<td><input type="TEXT" name="apelido" placeholder="Informe o apelido do jogador" /><br></td>
					<td><input type="checkbox" name="situacao" value="sim" checked>Ativo</td>	
				</tr>*/
                
            ?>  
            </div>
        </body>
    </html>
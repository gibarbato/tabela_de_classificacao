<html>
    <head>
        <title>Lista de Jogadores</title>
    </head>
    <body>
        <h1>Jogadores ativos</h1>
        
        
        <form method="get" action="tdm_resultados2.php">
            <label>Data do jogo:</label><input type="date" name="dt" value= "today">
        <table border=1>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Confirmação do Jogo</th>
                <th>Confirmação do Rango</th>
                <th>Presença do Jogo</th>
                <th>Time</th>
                <th>Gols Favor</th>
                <th>Gols Contra</th>
                </tr>
            
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

         $rs = $connection->prepare('select * from jogador where situacao like "sim" order by nome');
         
         
         if($rs-> execute())
         {
             while($registro = $rs->fetch(PDO::FETCH_OBJ))
                {
                    echo "<tr>";
                    echo "<td>" . $registro->id. "</td>"; 
                    echo "<td>" . $registro->nome. "</td><td><input type='checkbox' name=cj".$registro->id." value= 'sim' checked>Sim</td>";
                    echo "<td><input type='checkbox' name=cr".$registro->id." value= 'sim' checked>Sim</td>";
                    echo "<td><input type='checkbox' name=pj".$registro->id." value= 'sim' checked>Sim</td>";
                    echo "<td><input type='radio' name=t".$registro->id." value='A'> Time A <input type='radio' name=t".$registro->id." value='B'> Time B</td>";
                    echo "<td><input type='number' name=gf".$registro->id." min='0' max='20' value='0'/></td>";
					echo "<td><input type='number' name=gc".$registro->id." min='0' max='20' value='0'/></td>";
                    echo "<tr>";
                    
                    
                }
                
         }
         else
         {
            echo "Falha na seleção de registros.<br>";    
         }
            
            ?>
            
        </table>
                <input type="submit" value="Enviar resultado">
        </form>
    </body>


                
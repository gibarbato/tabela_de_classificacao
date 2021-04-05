<html>
    <head>
        <title>Lista de Jogadores</title>
    </head>
    <body>
        <h1>Jogadores ativos</h1>
        
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
         
            echo "<select name = 'atletas'>";
         $sql = 'select id, nome from jogador where situacao like "sim" order by nome';
         foreach($connection->query($sql)as $row){
            
            echo "<option value = ".$row['id'].">".$row['id'] . "<//td/option></br>";
            
         }
         echo "</select>";
      
         $connection = null;
         /*   
         $rs = $connection->prepare('select * from jogador where situacao like "sim" order by nome');
         
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
         }
            
          */                     
            
        ?>
       
    </body>


                
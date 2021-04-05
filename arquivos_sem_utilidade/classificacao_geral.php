<html>
    <head>
        <title>Tabela de Classiicação</title>
        <link rel="stylesheet" type="text/css" href="_css/estilo.css">
    </head>
    <body>
        <h1>Tabela de Classificação</h1>
        
        
        
        <table class= "w3-table-all" style="width:50%" border=1 background-color:#f1f1f1>
            <tr>
                <th>Nome</th>
                <th>Pontos</th>
                <th>Presença</th>
                <th>Vitórias</th>
                <th>Empatess</th>
                <th>Derrotas</th>
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

         $rs = $connection->prepare('select * from Classificação');
         
         if($rs-> execute())
         {
             while($registro = $rs->fetch(PDO::FETCH_OBJ))
                {
                    echo "<tr>";
                    echo "<td>" . $registro->Nome . "</td>";
                    echo "<td>" . $registro->Pontos . "</td>";
                    echo "<td>" . $registro->Presenças . "</td>";
                    echo "<td>" . $registro->Vitórias . "</td>";
                    echo "<td>" . $registro->Empates . "</td>";
                    echo "<td>" . $registro->Derrotas . "</td>";
                    echo "<tr>";
                }
                
         }
         else
         {
            echo "Falha na seleção de registros.<br>";    
         }
            
            
            
            ?>
            
            
        </table>
    </body>


                
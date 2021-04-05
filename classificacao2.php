<html>
    <head>
        <title>Tabela de Classiicação</title>
        <link rel="stylesheet" type="text/css" href=>
        <style>table {
                    border-collapse: collapse;
                    width: 100%;
                }
                
                th, td {
                    text-align: left;
                    padding: 4px;
                }
                
                tr:nth-child(even){background-color: #f2f2f2}
                
                th {
                    background-color: #4CAF50;
                    color: white;
                }
</style>
    </head>
    <body>
        <h1>Tabela de Classificação</h1>
        
        
        
        
        <table class= "w3-table-all" style="width:50%" border=1 background-color:#f1f1f1>
        
            <tr>
                <th>Nome</th>
                <th>Pontos</th>
                <th>Nº de jogos</th>
                <th>Presença</th>
                <th>Vitórias</th>
                <th>Empatess</th>
                <th>Derrotas</th>
            </tr>
            
            <?php
  
        $datai = isset($_GET["dti"])?$_GET["dti"]:"Solicitar data inicial";
        $dataf = isset($_GET["dtf"])?$_GET["dtf"]:"Solicitar data Final";       
        
        echo "Pedíodo de $datai a $dataf</br>";
            
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

         $rs = $connection->prepare("select nome as Nome,
                                    (sum(resultado like 'v')*3 + sum(resultado like 'e') +
                                    sum(conf_jogo like 'sim') + sum(conf_rango like 'sim') +
                                    sum(pres_jogo like 'sim')) as Pontos,
                                    count(conf_jogo) as 'Jogos',
                                    sum(pres_jogo like 'sim') as 'Presenças',
                                    sum(resultado like 'V') as Vitórias,
                                    sum(resultado like 'E') as Empates,
                                    sum(resultado like 'D') as Derrotas
                                    from partida 
                                    where dia between'$datai'and'$dataf'
                                    group by nome 
                                    order by pontos desc, pres_jogo desc;");
         
         if($rs-> execute())
         {
             while($registro = $rs->fetch(PDO::FETCH_OBJ))
                {
                    echo "<tr>";
                    echo "<td>" . $registro->Nome . "</td>";
                    echo "<td>" . $registro->Pontos . "</td>";
                    echo "<td>" . $registro->Jogos . "</td>";
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
        
        <a href="cadastroJogadores.php">Tela Inicial</a>
    </body>


                
<html>
    <head>
        <title>RESULTADOS</title>
        <link rel="stylesheet" type="text/css" href="_css/estilo.css">
    </head>
    <body>
               <?php
            $jogador1 = isset($_GET["pesquisa1"])?$_GET["pesquisa1"]:"";   
            $jogador2 = isset($_GET["pesquisa2"])?$_GET["pesquisa2"]:"";
            $datar1 = isset($_GET["dtri"])?$_GET["dtri"]:"";   
            $datar2 = isset($_GET["dtrf"])?$_GET["dtrf"]:"";
                       
        ?>
        
        
        <div class="relative">
        <table border=1>
            <tr>
                <th>Vitórias</th>
                <th>Empates time A</th>
                <th>Empates time B</th>
                <th>Derrotas</th>
                <th>Data</th>
                </tr>
            
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
        
         $rs = $connection->prepare("select sum(if(nome = '$jogador1' and resultado = 'v'=true,1,0) +
                                                if(nome = '$jogador2' and resultado = 'v'=true,1,0))  as vitoria,
                                                sum(if(nome = '$jogador1' and resultado = 'd'=true,1,0) +
                                                if(nome = '$jogador2' and resultado = 'd'=true,1,0))  as derrota,
                                                sum(if(nome = '$jogador1' and equipe = 'a' and resultado = 'e'=true,1,0) + if(nome = '$jogador2' and equipe = 'a'  and resultado = 'e'=true,1,0)) as empateA,
                                                sum(if(nome = '$jogador1' and equipe = 'b' and resultado = 'e'=true,1,0) + if(nome = '$jogador2' and equipe = 'b'  and resultado = 'e'=true,1,0)) as empateB,
                                                dia 
                                                from partida
                                                where dia between '$datar1' and '$datar2' and nome in ('$jogador1','$jogador2')
                                                group by dia;");
         $somav = 0;
         $somad = 0;
         $somae = 0;
         if($rs-> execute())
         {
             while($registro = $rs->fetch(PDO::FETCH_OBJ))
                {
                    echo "<tr>";
                    echo "<td>" . $registro->vitoria . "</td>";
                    echo "<td>" . $registro->empateA . "</td>";
                    echo "<td>" . $registro->empateB . "</td>";
                    echo "<td>" . $registro->derrota . "</td>";
                    echo "<td>" . $registro->dia . "</td>";
                    echo "<tr>";
                    
                    if(($registro->vitoria)==2){
                        $somav= $somav+$registro->vitoria;}
                    if(($registro->empateB)==2){
                        $somae= $somae+$registro->empateB;}
                        else if(($registro->empateA)==2){
                        $somae= $somae+$registro->empateA;}
                    if(($registro->derrota)==2){
                        $somad= $somad+$registro->derrota;}
                   
            }
        $somav = $somav/2;
        $somae = $somae/2;
        $somad = $somad/2;
        
        $jogosjuntos = $somav + $somad + $somae;
        
        $count = $rs->rowcount();
        
        echo "<h1>Os jogadores $jogador1 e $jogador2 jogaram juntos $jogosjuntos vezes<br> em $count rodadas e o desempenho foi: </h1>";
        echo "<h2>Vitórias = " . $somav ."</h2>";
        echo "<h2>Empates = " . $somae ."</h2>";
        echo "<h2>Derrotas = " . $somad ."</h2>";
        echo "<h3>no período entre $datar1 e $datar2</h2>";
         }
         else
         {
            echo "Falha na seleção de registros.<br>";    
         };
      ?>
        </table>
       <a href="cadastroJogadores.php">Tela Inicial</a>
    </body>


                
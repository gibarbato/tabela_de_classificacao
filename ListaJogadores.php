<html>
    <head>
        <meta charset="utf-8">
        <title>Lista de Jogadores</title>
        <link rel="stylesheet" type="text/css" href="_css/estilo.css">
        <style>
div.relative {
    position: relative;
    top: 10px;
    width: 400px;
    height: 650px;
    border: 3px solid #73AD21;
} 

div.absolute {
    position: absolute;
    top: 10px;
    right: 200px;
    width: 1000px;
    height: 100px;
    border: 3px solid #73AD21;
}
</style>
    </head>
    <body>
        
        <?php
            $sit = isset($_GET["pesq"])?$_GET["pesq"]:"sim";   
            $jogador = isset($_GET["editar"])?$_GET["editar"]:"sim";
        
        
        /*if($sit=="sim"){echo"<h1>Jogadores Mensalistas</h1>"}
        else if($sit=="nao"){echo"<h1>Jogadores Inativos</h1>"}
        else{echo"<h1>Jogadores Cadastrados</h1>"};*/
        
        
        ?>

        <div class="relative">
        <table border=1>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Apelido</th>
                <th>Mensalista</th>
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
        
        if ($sit=="todos"){
         $rs = $connection->prepare('select * from jogador order by nome'); /*where situacao like "sim"*/
         
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
      } else{
         $rs = $connection->prepare("select * from jogador where situacao ='$sit'order by nome"); /*where situacao like "sim"*/
         
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
      }
      
            ?>
        
        </table>
        </div>
        <h3><a href="cadastroJogadores.php">Tela Inicial</a></h3>
        
        <div class="absolute">
        <table border=1>
            <tr>
                <th>Nome</th>
                <th>Apelido</th>
                <th>Mensalista</th>
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
        
        if ($sit=="todos"){
         $rs = $connection->prepare('select * from jogador order by nome'); /*where situacao like "sim"*/
         
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
      } else{
         $rs = $connection->prepare("select * from jogador where nome ='$jogador'order by nome"); /*where situacao like "sim"*/
         
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
                
         }
         else
         {
            echo "Falha na seleção de registros.<br>";    
         }
      }
      
            ?>        
        </div>
        
    </body>


                
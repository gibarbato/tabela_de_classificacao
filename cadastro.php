<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <link rel="stylesheet" href="_css/estilo.css"/>
            <meta charset="utf-8"/>
            <title>Cadastro de jogadores</title>
            <style></style>
            
        </head>
        <body>
            
            <?php
                $nome = isset($_GET["nome"])?$_GET["nome"]:"Nome não informado";
                $apelido = isset($_GET["apelido"])?$_GET["apelido"]:"Apelido não informado";
                $sit = isset($_GET["situacao"])?$_GET["situacao"]:"nao";
                
                echo "O jogador com o nome: $nome, apelido $apelido, $sit está ativo<br/>";
        
        
        /*integração com o banco de dados*/

		try
        {
            $connection = new PDO("mysql:host=localhost;dbname=tdm_bd","root","");
            $connection->exec("set names utf8");
        }
        
        catch(PDOException $e)
            {
                echo "Falha ". $e->getMessage();
                exit();
            }
        
        $sql = "insert into jogador (nome, apelido, situacao)
                values(?,?,?)";
        
        $stmt = $connection->prepare($sql);
        
        $stmt->bindParam(1,$_GET["nome"]);
        $stmt->bindParam(2,$_GET["apelido"]);
        $stmt->bindParam(3,$_GET["situacao"]);
        
        
        $stmt->execute();
        
        if ($stmt->errorCode() != "00000")
            {
                echo "erro códido";
            }

        $connection = null;
            ?>  
        


        
        
        </body>
        
    </html>
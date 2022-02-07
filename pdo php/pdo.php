
<?php
     
    $dsn = "mysql:dbname=blog;host=127.0.0.1";
    //pdo pede 3 itens 1° tipo de banco de dados 2° nome do banco de dados 3° nome do host
    $dbuser = "root";
    $dbpass = "";

    try {
        $pdo = new PDO($dsn,$dbuser,$dbpass);
        //$nome = "Testador 2";
        //$email = "teste2@hotmail.com";
        //$senha = md5("123");
    ####3 -!!!!! - Inserindo dados
        //$sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'";
      ###### - mandando mostrar os dados
        /* $sql = "SELECT * FROM usuarios WHERE id = '100'";
        $sql = $pdo->query($sql);
        if($sql->rowCount()> 0){

           foreach($sql->fetchAll() as $usuario){
                echo "nome:".$usuario["nome"]."email: "."- ".$usuario["email"]."</br>";
           }

        }else{
            echo "não ha usuarios cadastrados";
        }
        */
        // atualizando os dados
       /* $novasenha = md5("4545assasasasaas");
        $sql = "UPDATE usuarios SET senha = '$novasenha' WHERE id = '2' ";
        $sql = $pdo->query($sql);*/
    #"------- DELETANDO USUARIOS
        $sql = "DELETE FROM usuarios WHERE id = '2'";
        $pdo->query($sql);

    } catch(PDOException $e){
        echo "falhou:".$e->getMessage();
    }
    
    
?>
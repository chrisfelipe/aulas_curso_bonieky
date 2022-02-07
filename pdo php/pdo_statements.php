<?php
      $dsn = "mysql:dbname=blog;host=127.0.0.1";
      $dbuser = "root";
      $dbpass = "";
  
    try{
        $pdo = new PDO($dsn, $dbuser,$dbpass);

        $nome = 'christyan';

        $id = 1;

        $sql = "UPDATE usuarios SET nome =:nome WHERE id = :id";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(':nome',$nome);
        $sql->bindValue(':id',$id);
        $sql->execute();
        echo "usuario atualizado com sucesso";

    
    }catch(PDOException $e){
        echo "Falhou:".$e->getMessage();
    }

?>
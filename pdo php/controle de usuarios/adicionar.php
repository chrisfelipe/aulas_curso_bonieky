<?php
require 'config.php';
if(isset($_POST['nome']) && empty($_POST['nome'])== false){
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));
    $sql ="INSERT INTO usuarios SET nome = '$nome', email = '$email', senha ='$senha'";
    $pdo->query($sql);

    header("location: z.php");
};

?>
<form action="" method="POST">
    nome: <br>
    <input type="text" name="nome" id=""><br><br>
    Email: <br>
    <input type="text" name="email" id=""><br><br>
    senha: <br>
    <input type="password" name="senha" id=""><br><br>

    <input type="submit" value="Cadastrar">
</form>

<?php

?>
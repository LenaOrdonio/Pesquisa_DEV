<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
 
 $conexao = mysqli_connect('localhost','root','','pesquisa_DEV');
 $user = $_POST['usuario'];
 $pass = $_POST['senha'];
 $retorno = $conexao->query("SELECT * FROM user WHERE user='$user' AND pass = '$pass';");
 echo $retorno->num_rows;
 if ($retorno->num_rows == 1){
     echo "Seja bem vindo(a)";
     $user = $retorno->fetch_array();
     $conexao->query("INSERT INTO ponto (id_user) VALUES (" . $user['id'] . ")");
 }else{
     echo "Usuário não autorizado";
 }

/*

 <?php
    $user = $_POST['usuario'];
    $pass = $_POST['senha'];
    if($user == '123' && $pass == '456'){
        echo 'usuário autenticado';
    }else{
        echo 'usuário não autorizado';
    }
    ?>

echo $conexao->host_info; informações sobre o banco no geral

 echo var_dump($retorno);

 while ($user = $retorno->fetch_array()){
    echo $user['nome']."<br>"; 
} */
?>
   
</body>
</html>
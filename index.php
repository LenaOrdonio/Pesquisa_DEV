<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>iniciando com php</h1>
    <h2><?php 
    $user = $_GET['usuario'];
    $pass = $_GET['senha'];
    $retorno_user = '';
    $retorno_pass = '';
  if($user == "123"){
      $retorno_user = 'usuário correto';
      if($pass == '321'){
          $retorno_pass = 'senha correta';
        
      }else{
          $retorno_pass = 'senha incorreta';
      }
  }else{
      $retorno_user = 'usuário incorreto';
  }
    ?>
    </h2>
    <h2><?php echo $retorno_user; ?></h2>
    <h2><?php echo $retorno_pass; ?></h2>
    
</body>
</html>
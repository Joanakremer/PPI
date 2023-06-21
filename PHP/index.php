<?php
 include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])){
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if(strlen($email) == 0 && strlen($senha) == 0){
    }else if(strlen($email) == 0){
        echo "<script>alert('ERRO! O campo Email esta vazio.');</script>";
    } else if(strlen($senha) == 0){
        echo "<script>alert('ERRO! O campo Senha esta vazio.');</script>";
    }else{
          verificaLoginSenha($email, $senha);
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
    <style>
        body{
            background-color: #ececec;
            height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
       #container{
        background-color: white;
            padding: 20px;
            width: 300px;
            height: 250px;
            border: solid;
       }
       #cabecalho{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 50px;
       }
       #campos{
        padding: 10px;
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
        }
        input{
            height: 35px;
        }
        #botao{
            height: 5vh;
            display: flex;
            align-items: end;
            justify-content: space-around;
        }
    </style>
</head>
<body>
    <div id="container">
        <div id="cabecalho">
            <h1 style="font-size: 400%;">Entrar</h1>
        </div>
        <form action="" method="POST">
            <div id="campos">
                <BR></BR>
                <input type="text" name="email" placeholder="EMAIL" > 
                <br>
                <input type="password" name="senha" placeholder="SENHA" > 
                <br>
            
            </div>
            <div id="botao">
                <a id="sign" href="cadastro.php" > Não possuí cadastro?</a>
                <button type="submit">Cadastrar</button>
            </div>
        </form>
    </div>
</body>
</html>
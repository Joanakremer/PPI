<?php 
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha']) || isset($_POST['nome']) || isset($_POST['idade'])|| isset($_POST['peso'])){
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $idade= $_POST['idade'];
    $peso = $_POST['peso'];

    if(strlen($email) == 0 && strlen($senha) == 0 && strlen($nome) == 0 && strlen($raca) == 0&& strlen($idade) == 0&& strlen($peso) == 0){
    }else if(strlen($email) == 0){
        echo "<script>alert('ERRO! O campo Email esta vazio.');</script>";
    } else if(strlen($senha) == 0){
        echo "<script>alert('ERRO! O campo Senha esta vazio.');</script>";
    } else if(strlen($nome) == 0){
        echo "<script>alert('ERRO! O campo Nome esta vazio.');</script>";
    } else if(strlen($raca) == 0){
        echo "<script>alert('ERRO! O campo Raça esta vazio.');</script>";
    } else if(strlen($idade) == 0){
        echo "<script>alert('ERRO! O campo Idade esta vazio.');</script>";
    } else if(strlen($peso) == 0){
        echo "<script>alert('ERRO! O campo Peso esta vazio.');</script>";
    }else{
          insereanimal($email,$senha,$nome,$raca,$idade,$peso);
          header('Location: index.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<style>
   body{
        height: 98vh;
        width: 98vw;
        background-color: lightblue;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    #botoes{
        display: flex;
        align-items: center;
        justify-content: space-around;
        flex-direction: column;
    }
    p{
        display: flex;
        align-items: center;
        justify-content: center;
    }
    #email{
        margin-top: 25px;
    }
    #senha{
        margin-bottom: 35px;
    }
    #form{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        width: 450px;
        height: 450px;
        border: solid black 1px;
    }
    button{
        background-color: yellow;
        border-radius: 5%;
        width: 100px;
        height: 25px;
        border: 0px;
        margin-bottom: 15px;
    }
</style>
<body>
<div id="form">
        <h1>Insira suas credenciais</h1>
        <form action="" method="POST">
            <p id="email">
                <label for="email">E-mail</label>  
                <input type="text" name="email"> 
            </p>
            <p id="senha">
                <label for="senha">Senha</label>  
                <input type="password" name="senha"> 
            </p>
            <div id="botoes">
                 <button type="submit">Cadastrar</button>
            </div>
        </form>
    </div> 
</body>
</html>
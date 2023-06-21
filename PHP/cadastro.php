<?php 
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha']) || isset($_POST['nome']) || isset($_POST['raca']) || isset($_POST['idade'])|| isset($_POST['peso'])){
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $raca = $_POST['raca'];
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
    <style>
        body{
            height: 95vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
       #container{
            background-color: white;
            padding: 20px;
            width: 300px;
            height: 500px;
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
            padding: 10px;
            height: 5%;
            display: flex;
            align-items: end;
            justify-content: right;
        }
        button{
            height: 35px;
            width: 100%;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div id="container">
        <div id="cabecalho">
            <h1 style="font-size: 400%;">Cadastrar</h1>
        </div>
        <br>
        <form action="" method="POST">
            <div id="campos">
                <input type="text" name="email" placeholder="EMAIL"> 
                <br>
                <input type="password" name="senha" placeholder="SENHA"> 
                <br>
                <input type="text" name="nome" placeholder="NOME CACHORRO"> 
                <br>
                <input type="text" name="raca" placeholder="RAÇA"> 
                <br>
                <input type="text" name="idade" placeholder="IDADE"> 
                <br>
                <input type="text" name="peso" placeholder="PESO(KG)"> 
                <br>
            </div>
            <div id="botao">
                <button type="submit">Cadastrar</button>
            </div>
        </form>
    </div>
</body>
</html>
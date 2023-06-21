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
          editaranimal($id,$email,$senha,$nome,$raca,$idade,$peso);
          header('Location: home.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>
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

    </style>
</head>
<body>
    <?php

         $id = $_GET['id'];
        $animal = recuperaanimal($id);
        if ($animal) {
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $nome = $_POST['nome'];
            $raca = $_POST['raca'];
            $idade= $_POST['idade'];
            $peso = $_POST['peso'];
        }
    ?>
    <div id="container">
        <div id="cabecalho">
            <h1 style="font-size: 400%;">Alterar</h1>
        </div>
        <br>
        <form action="" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div id="campos">
                <input type="text" name="email" placeholder="EMAIL" value='<?php echo $email; ?>' required=""/> 
                <br>
                <input type="password" name="senha" placeholder="SENHA"  value='<?php echo $senha; ?>' required=""/> 
                <br>
                <input type="text" name="nome" placeholder="NOME CACHORRO"  value='<?php echo $nome; ?>' required=""/> 
                <br>
                <input type="text" name="raca" placeholder="RAÇA"  value='<?php echo $raca; ?>' required=""/> 
                <br>
                <input type="text" name="idade" placeholder="IDADE"  value='<?php echo $idade; ?>' required=""/> 
                <br>
                <input type="text" name="peso" placeholder="PESO(KG)"  value='<?php echo $peso; ?>' required=""/> 
                <br>
            </div>
            <div id="botao">
                <input id="bttn" type='submit' value='Confirmar' class='btn'> 
            </div>
        </form>
    </div>
</body>
</html>
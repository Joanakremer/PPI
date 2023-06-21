<?php 

include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha']) || isset($_POST['nome']) || isset($_POST['idade'])|| isset($_POST['peso'])){
     
    $id = $_POST['id'];
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
          editaranimal($id,$email,$senha,$nome,$raca,$idade,$peso);
          header('Location: home.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="php.css">
    <title>Document</title>
</head>
<style>
    body{
        height: 98vh;
        width: 98vw;
        background-color: lightblue;
        display: flex;
        justify-content: center;
        align-items: center;
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
        margin-top: 35px;
    }
    #senha{
        margin-top: 25px;
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
    #botao{
        background-color: yellow;
        border-radius: 5%;
        width: 100px;
        height: 25px;
        border: 0px;
        margin-bottom: 15px;
        margin-top: 15px;
    }
</style>
<body>
<?php

            $id = $_GET['id'];

        // Chame a função para obter os dados do usuário por ID
        $animal = recuperaanimal($id);
        // Verifique se o usuário foi encontrado
        if ($animal) {
            $raca = $animal['email'];
            $idade = $animal['senha'];
        } else {
            // Usuário não encontrado, faça o tratamento adequado
            // ...
        }
    ?>

    <div id='form'> 
    <h1>Alterar Cadastro</h1>

        <form action='' method='POST'> 
            <input type="hidden" name="id" value="<?php echo $id; ?>">
           
            <div class="campos um">

                <div id='email'>
                    <label>Email</label>
                    <input type='text' name='email' value='<?php echo $raca; ?>' required=""/>
                    		
                </div>

            </div>

                <div id='senha'>
                    <label>Senha</label>
                    <input type='text' name='senha' value='<?php echo $idade; ?>' required=""/>
                </div>
                <div id="botoes">
                  <input id="botao" type='submit' value='Confirmar' class='btn'>  
                </div>
            </div>
            
        </form>
    </div>

    
</body>
</html>
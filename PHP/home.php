<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Home</title>
</head>
<style>
    body{
        background-color: lightblue;
    }
    #search-box{
        display: flex;
        width: 300px;
        flex-direction: row;
    }
</style>
<body>
<main>

    <h1>Usuários</h1>
    
    <table class='tabela'>
    <form method="GET" action="pesquisa.php" >
    <div id="search">
        <div id="search-box">
            <div class="search-field">
            <input name="pesquisa" placeholder="Digite um email" class="input" type="text">
                <div type="submit" class="search-box-icon">
                    <button class="btn-icon-content">Pesquisar</button>
                </div>
            </div>
        </div>
    </div>    
    </form> 
        <tr>
            <th>Code</th>
            <th>Email</th>
            <th>Senha</th>
            <th>Ações</th>
        </tr>
        <?php
include_once "conexao.php";
session_start();

if (isset($_SESSION['resultado'])) {
    $pesquisa = $_SESSION['resultado'];
    if (!empty($pesquisa)) {
        foreach ($pesquisa as $row) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nome'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['senha'] . "</td>";
            echo "<td>" . $row['telefone'] . "</td>";
            echo "<td><a class='linkF ' href='edit.php?id=" . $row['id'] . "'><button  class='button E'>Edit</button></a> | <a class='linkF ' href='delete.php?id=" . $row['id'] . "'><button class='button D'>Delete</button></a></a></td>";
            echo "</tr>";
        }
    } else {
        echo "Nenhum usuário encontrado.";
    }
} else {
    $resultado = recuperaALL();
    if (!empty($resultado)) {
        foreach ($resultado as $row) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nome'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['senha'] . "</td>";
            echo "<td>" . $row['telefone'] . "</td>";
            echo "<td><a class='linkF ' href='edit.php?id=" . $row['id'] . "'><button  class='button E'>Edit</button></a> | <a class='linkF' href='delete.php?id=" . $row['id'] . "'><button class='button D'>Delete</button></a></td>";
            echo "</tr>";
        }
    } else {
        echo "Nenhum usuário encontrado.";
    }
}
?>
    </table> 
</main>
</body>
</html>
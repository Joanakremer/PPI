<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
       #pesquisar{
        background-color: white;
        display: flex;
        align-items: center;
        width: 100%;
        height: 50px;
        border: none;
        box-shadow: 0px 5px 10px #9aa9bb;
       }
       #pesquisaelem{
        display: flex;
        width: 60%;
       }
       input{
        width: 220px;
        height: 25px;
       }
    </style>
</head>
<body>
    <main>
        <table class='tabela'>
        <form method="GET" action="pesquisa.php" >
            <h1 >Home</h1>
                    <div id="pesquisaelem">
                        <input name="pesquisa" placeholder="Digitar EMAIL" class="input" type="text">
                    <button class="btn-icon-content">Pesquisar</button>
                    </div>
                </div>
            </div>
        </form> 
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Senha</th>
                <th>Nome</th>
                <th>Raça</th>
                <th>Idade</th>
                <th>Peso</th>
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
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['senha'] . "</td>";
                echo "<td>" . $row['nome'] . "</td>";
                echo "<td>" . $row['raca'] . "</td>";
                echo "<td>" . $row['idade'] . "</td>";
                echo "<td>" . $row['peso'] . "</td>";
                echo "<td><a class='linkF ' href='editar.php?id=" . $row['id'] . "'><button  class='button E'>Edit</button></a> | <a class='linkF ' href='deletar.php?id=" . $row['id'] . "'><button class='button D'>Delete</button></a></a></td>";
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
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['senha'] . "</td>";
                    echo "<td>" . $row['nome'] . "</td>";
                    echo "<td>" . $row['raca'] . "</td>";
                    echo "<td>" . $row['idade'] . "</td>";
                    echo "<td>" . $row['peso'] . "</td>";
                echo "<td><a class='linkF ' href='editar.php?id=" . $row['id'] . "'><button  class='button E'>Edit</button></a> | <a class='linkF' href='deletar.php?id=" . $row['id'] . "'><button class='button D'>Delete</button></a></td>";
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
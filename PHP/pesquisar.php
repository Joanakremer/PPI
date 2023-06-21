<?php
include("conexao.php");

if (isset($_GET['pesquisa'])) {
    
    $pesquisa = $_GET['pesquisa'];

    $sql = "SELECT * FROM animal WHERE email LIKE :pesquisa";
    $con=conectaBD();
    $stm = $con->prepare($sql);
    $stm->bindValue(':pesquisa', '%' . $pesquisa . '%');
    $stm->execute();
    session_start();
    $_SESSION['resultado'] = $stm->fetchAll(PDO::FETCH_ASSOC);

    header("Location: home.php");
}
?>
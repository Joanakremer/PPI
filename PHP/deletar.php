<?php 
include('conexao.php');

if(!isset($_GET['id'])){
    die();
}


$id = $_GET['id'];

deletaranimal($id);
header('Location: home.php');

?>
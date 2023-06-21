<?php

function conectaBD(){
    $usuario = 'root';
    $senha = 'aluno';
    $database = 'ppidatabase';
    $host = 'localhost';

    $con=new PDO("mysql:host=$host;dbname= $database","$usuario","$senha");

    return $con;

}

function editaranimal($id,$email,$senha,$nome,$raca,$idade,$peso){
    try {
    $con = conectaBD();
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE animal SET email=?, senha=?, nome=?, raca=?, idade=?, peso=? WHERE id=?";
    $stm = $con->prepare($sql);
    $stm->bindParam(1, $email);
    $stm->bindParam(2, $senha);
    $stm->bindParam(3, $nome);
    $stm->bindParam(4, $raca);
    $stm->bindParam(5, $idade);
    $stm->bindParam(6, $peso);
    $stm->bindParam(7, $id);
    $stm->execute();
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
}

function insereanimal($email,$senha,$nome,$raca,$idade,$peso){
    try{
    $con=conectaBD();
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql="INSERT INTO animal(email,senha,nome,raca,idade,peso) VALUES (?,?,?,?,?,?)";
    $stm->bindParam(1, $email);
    $stm->bindParam(2, $senha);
    $stm->bindParam(3, $nome);
    $stm->bindParam(4, $raca);
    $stm->bindParam(5, $idade);
    $stm->bindParam(6, $peso);
    $stm->execute();
    } catch(PDOException $e){
        echo 'ERRO: '.$e->getMessage();
    }
    return $con->lastInsertId();
}

function recuperaanimal($id) {
    $con = conectaBD();
    $sql = "SELECT * FROM animal WHERE id = ?";
    $stm = $con->prepare($sql);
    $stm->bindParam(1, $id);
    
    try {
        $stm->execute();
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
        if ($result && count($result) > 0) {
            return $result[0];
        } else {
            return null; 
        }
    } catch (PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
        return null;
    }
}

function recuperaAll(){
    $con=conectaBD();
    $sql="SELECT * FROM animal";
    $stm=$con->prepare($sql);

    $stm->execute();
    $result=$stm->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function verificaLoginSenha($email, $senha) {
    $con=conectaBD();
   
    $sql = "SELECT * FROM animal WHERE email = ? AND senha = ?";
    $stm= $con->prepare($sql);
    $stm->bindParam(1,$email);
    $stm->bindParam(2,$senha);
    $stm->execute();
    $result = $stm->fetchAll(PDO::FETCH_ASSOC);
    
   
    if (count($result) > 0) {
        header('Location: home.php');
    } else {
        echo "<script>alert('Login incorreto!');</script>";
    }
}

function deletaranimal($id){
    $con=conectaBD();
    $sql="DELETE FROM animal WHERE id=?";
    try {
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stm=$con->prepare($sql);
        $stm->bindParam(1,$id);
        $stm->execute();
    } catch (PDOException $e) {
        echo 'ERRO:' .$e->getMessage();
    }
}

?>
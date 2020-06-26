<?php
session_start();

require "config.php";

if (isset($_SESSION['nome'])) {
    $nome = $_SESSION['nome'];
    $buscar = $con->prepare("SELECT * FROM mensagem");
    $buscar->execute();
    $size = $buscar->rowCount();
   
    if($size > 0) {
        while($linha = $buscar->fetch(PDO::FETCH_ASSOC)){
            $nome = $linha['nome'];
            $mensagem = $linha['mensagem'];
            $hora = $linha['hora'];
            $ip = $linha['ip'];

            echo "<p style='margin-top: 10px' title=".$hora."><b>".$nome."</b>: ".$mensagem."</p>";
        }
    } else {
    echo "<p>Seja bem-vindo ".$nome ."</p>";
    echo "<p> Não há mensagem por enquanto </p>";
    }
  
}
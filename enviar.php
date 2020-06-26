<?php
session_start();

require "config.php";

date_default_timezone_set('America/Sao_Paulo');

if (isset($_SESSION['nome'])) {
    $nome = strip_tags($_SESSION['nome']);
    $mensagem = htmlspecialchars($_POST['mensagem']);
    $hora = date('H:i:s');
    $ip = $_SERVER['REMOTE_ADDR'];

    $sql = $con->prepare("INSERT INTO mensagem (nome, mensagem, hora, ip) value(:nome, :mensagem, :hora, :ip)");
    $sql->bindValue(":nome", $nome);
    $sql->bindValue(":mensagem", $mensagem);
    $sql->bindValue(":hora", $hora);
    $sql->bindValue(":ip", $ip);
    $sql->execute();
}
<?php
include 'contato.class.php';
$contato = new Contato();

if (!empty($_POST['email'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $contato->create($email, $nome);

    header("Location: index.php");
}
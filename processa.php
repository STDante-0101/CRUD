<?php 

include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);


$result_usuario = "INSERT INTO usuarios (nome, email, created) VALUES('$nome', '$email', NOW())";
$result_usuario = mysqli_query($conn, $result_usuario);

 
if(mysqli_insert_id($conn)) {
        header("Location: index.php");
}else{
        header("Location: index.php");
}

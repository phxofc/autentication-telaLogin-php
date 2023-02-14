<?php
require_once('C:\xampp\htdocs\sitePHP\banco\connect.php');

$user = filter_var($_POST['user']); 

//criptografia
$pass = md5($_POST['pass']); 

$sql = 'SELECT * FROM usuarios WHERE user=:user AND senha=:pass';

$result = $conn->prepare($sql);
$result->execute((['user' => $user,'pass'=>$pass]));
$usuarios = $result->fetch();

if(!empty($usuarios)){
    session_start();
    $_SESSION['id'] = $$usuarios['id'];
    $_SESSION['user'] = $usuarios['user'];
    $_SESSION['pass'] = $usuarios['senha'];
    header('location: ../menu.php');
}else{
    echo "usuario nao cadastrado";
}

?>
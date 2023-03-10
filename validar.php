<?php
use Glow\App\Classes\Usuario;
require __DIR__.'/vendor/autoload.php';

// require './src/classes/Usuario.php';


session_start();



$email = $_POST['email'];
$senha = $_POST['senha'];


$login = new Usuario();

// $login->ValidarLogin($usuario,md5($senha));
// $login->CriarUsuario("user","user","admin");
// exit;
$array = $login->ValidarLogin($email,$senha);

// var_dump($array);
echo "email" . $email .'<br>';
echo "senha " . md5($senha) .'<br>';


if( $array['email']){
  
  $_SESSION['email'] = $array['email'];
  $_SESSION['id'] = $array['pessoa_id'];

  header('Location: painel.php');

  echo $_SESSION['nome'];
}else{
  echo "<script>alert('Senha errada')
  location.href = 'login.php'
  </script>";

}
<?php

require './vendor/autoload.php';
session_start();

if(!$_SESSION['nome']){
  header('Location:login.php');
  
}else{
     header('Location:painel.php');
}


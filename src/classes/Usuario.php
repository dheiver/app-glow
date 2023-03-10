<?php

namespace Glow\App\Classes;

use Glow\App\Infraestrutura\CriadorDeConexao;
class Usuario {
    protected $nome;
    protected $senha;
    protected $tipo = 'user';
    public $array;
  
    public static function CriarUsuario($email,$senha,$pessoa_id){
      $pdo = CriadorDeConexao::Conexao();
  
      $sql = $pdo->prepare('INSERT INTO usuario (email,senha,pessoa_id,data_criacao) VALUES(:email,:senha,:pessoa_id,:data_criacao)');
      $agora = date('d/m/Y H:i');
      $sql->bindValue(':email', $email);
      $sql->bindValue(':senha', md5($senha));
      $sql->bindValue(':pessoa_id', $pessoa_id);
      $sql->bindValue(':data_criacao', $agora);
      $sql->execute();
    }
  
    public  function ValidarLogin($email,$senha)
    {
      $pass = md5($senha);
      $pdo = CriadorDeConexao::Conexao();
      $sql = $pdo->prepare("Select * from usuario where email = :email and senha = :senha");
      $sql->bindValue(':email', $email);
      $sql->bindValue(':senha', $pass);
      $sql->execute();   
     
       
          $array = $sql->fetch();
        return $array;
      
  
      // var_dump($senha);
    }
  
    public function PegarDados($id)
    {
      $pdo = CriadorDeConexao::Conexao();
      $sql = $pdo->prepare("Select nome from pessoa where id = :id");
      $sql->bindValue(':id', $id);
      $sql->execute();
      
      $array = $sql->fetch();
      return $array;
    }
  
    public function AlterarSenha($senha_antiga, $nova_senha, $id)
    {
      $pass = md5($senha_antiga);
      $new_pass = md5($nova_senha);
      $mid = $id;
     
      $pdo = CriadorDeConexao::Conexao();
      $sql = $pdo->prepare("Update usuario set senha = :nova_senha where senha = :senha_antiga and id = :id");
      $sql->bindValue(':id', $mid);
      $sql->bindValue(':nova_senha', $new_pass);
      $sql->bindValue(':senha_antiga', $pass);
      $sql->execute();   
  
      return true;
    }
  
  
  }
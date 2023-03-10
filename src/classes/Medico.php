<?php

namespace Glow\App\Classes;

use Glow\App\Infraestrutura\CriadorDeConexao;
class Medico {
    protected $nome;
    protected $senha;
   
    public $array;
  
    public static function CriarMedico($pessoa_id,$crm){
      $pdo = CriadorDeConexao::Conexao();
  
      $sql = $pdo->prepare('INSERT INTO medico (pessoa_id,crm) VALUES(:pessoa_id,:crm)');
     
      $sql->bindValue(':pessoa_id', $pessoa_id);
      $sql->bindValue(':crm', $crm);

      $sql->execute();
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
  
  
  
  
  }
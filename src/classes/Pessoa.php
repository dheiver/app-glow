<?php

namespace Glow\App\Classes;

use Glow\App\Infraestrutura\CriadorDeConexao;
class Pessoa {
    protected $nome;
    protected $senha;
    protected $tipo = 'user';
    public $array;
  
    public static function CriarPessoa($nome,$cpf,$data_nascimento,$endereco,$estado,$bairro,$cep,$tipo){
      $pdo = CriadorDeConexao::Conexao();
  
      $sql = $pdo->prepare('INSERT INTO pessoa (nome,cpf,data_nascimento,endereco,estado,bairro,cep,tipo,data_criacao) VALUES(:nome,:cpf,:data_nascimento,:endereco,:estado,:bairro,:cep,:tipo,:data_criacao)');
      $agora = date('d/m/Y H:i');
      $sql->bindValue(':nome', $nome);
      $sql->bindValue(':cpf', $cpf);
      $sql->bindValue(':data_nascimento', $data_nascimento);
      $sql->bindValue(':endereco', $endereco);
      $sql->bindValue(':estado', $estado);
      $sql->bindValue(':bairro', $bairro);
      $sql->bindValue(':cep', $cep);
      $sql->bindValue(':tipo', $tipo);
      $sql->bindValue(':data_criacao', $agora);
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
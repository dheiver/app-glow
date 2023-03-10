<?php 


require './vendor/autoload.php';
use Glow\App\Classes\Usuario;
use Glow\App\Classes\Medico;
use Glow\App\Classes\Pessoa;

//usuario
$email = $_POST['email'];
$senha = $_POST['senha'];

//usuario
$nome_completo = $_POST['nome_completo'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$data_nascimento = $_POST['data_nascimento'];
$tipo = 'M';

//medico
$crm = $_POST['crm'];


$login = new Usuario();
$medico = new Medico();
$pessoa = new Pessoa();


$retorno = $pessoa->CriarPessoa($nome_completo,$cpf,$data_nascimento,$endereco,$estado,$bairro,$cep,$tipo);


$id = (int)$retorno;


var_dump($id);
if($id){
    echo 'entrou if';
 $medico->CriarMedico($id,$crm);
 $login->CriarUsuario($email,$senha,$id);
}
<?php

namespace Glow\App\Infraestrutura;
// require '../vendor/autoload.php';
// require './vendor/autoload.php';
require 'logMensage.php';


use PDO;
use PDOException;


class CriadorDeConexao
{
    public static function Conexao()
    {
       
        // $hostname_config = HOSTBD; 
        // $database_config = BD;
             

        try {
            $PDO = new PDO( "mysql:dbname=u412120776_glowapp;host=185.239.210.103",
           'u412120776_adminGlow',
           'AdminGlowBd@2023');

            logMensage('Conectado ao banco com sucesso', 'info');
            return $PDO;

        } catch (PDOException $Exception ) {
            echo "FALHA AO CONECTAR AO BANCO: " . $Exception->getMessage( );

            logMensage("Falha ao conectar ao banco: {$Exception->getMessage( )}","error");
        }

    }

}


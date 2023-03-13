<?php

use EasyPDO\EasyPDO;

class Ajuda
{
    private $id;
    private $nome;
    private $email;
    private $telefone;

    public static function CadastrarContato($parametros)
    {
        $conn = new EasyPDO();
        $conn->insert("INSERT INTO comoajudar VALUES (0, :nome, :email, :telefone, NOW(), NULL)", $parametros);

        if (!$conn->affectedRows > 0)
        {
            throw new Exception('Erro ao tentar inserir os dados');
            return false;    
        }

        return true;
    }

    public static function BuscarContatoPorEmail($parametros)
    {
        $conn = new EasyPDO();
        $result = $conn->select("SELECT email FROM comoajudar WHERE email=:email", $parametros);
        
        return $result;

    }
}
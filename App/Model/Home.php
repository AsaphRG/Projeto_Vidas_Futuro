<?php

use EasyPDO\EasyPDO;

class Home
{
    private $id;
    private $email;

    public static function Cadastrarlead($parametros)
    {
       
        $conn = New EasyPDO();
        $conn->insert("INSERT INTO home VALUES (0, :email, NOW(), NULL)", $parametros);


        if(!$conn->affectedRows > 0)
        {
            throw new Exception('Erro ao tentar inserir os dados');
            return false;
        }

        return true;
        

    }
}

<?php
use EasyPDO\EasyPDO;

class Usuario
{
    public $id;
    public $nome;
    public $email;
    public $senha;
    public $recuperar_senha;
    public $created;
    public $modified;

    public static function loginUsuario($parametros)
    {
        $conn = new EasyPDO();
        $result = $conn->select('SELECT * FROM usuario WHERE email=:email AND senha=:senha LIMIT 1', $parametros);
        return $result;
        
    }

    public static function iniciarSessaoUsuario($usuario)
    {
        $_SESSION['id'] = $usuario[0]['id'];
        $_SESSION['nome'] = $usuario[0]['nome'];
        $_SESSION['email'] = $usuario[0]['email'];
        $_SESSION['senha'] = $usuario[0]['senha'];
        
        
    }
}
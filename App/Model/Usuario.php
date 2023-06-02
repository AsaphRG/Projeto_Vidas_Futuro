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

    public static function buscarUsuarios()
    {
        $conn = new EasyPDO();
        $result = $conn->select('SELECT * FROM usuario');
        return $result;
    }

    public static function buscarUsuariosID($id)
    {
        $conn = new EasyPDO();
        $result = $conn->select('SELECT * FROM usuario WHERE id=:id', $id);
        return $result;
    }

    public static function loginUsuario($parametros)
    {
        $conn = new EasyPDO();
        $result = $conn->select('SELECT * FROM usuario WHERE email=:email LIMIT 1', $parametros);
        return $result;
    }

    public static function iniciarSessaoUsuario($usuario)
    {
        $_SESSION['id'] = $usuario[0]['id'];
        $_SESSION['nome'] = $usuario[0]['nome'];
        $_SESSION['email'] = $usuario[0]['email'];
        $_SESSION['senha'] = $usuario[0]['senha'];
    }




    public static function cadastrarUsuario($parametros)
    {
        $conn = new EasyPDO();
        $result = $conn->insert("INSERT INTO usuario 
        VALUES (0, :nome, :email, :senha, :recuperar_senha, NOW(), NULL)", $parametros);

        if (!$conn->affectedRows > 0) {
            throw new Exception('Erro ao tentar inserir os dados');
            return false;
        }
        return true;
    }

    public static function AtualizarUsuario($parametros)
    {
        $conn = new EasyPDO();
        $result = $conn->update("UPDATE usuario SET usuario=:usuario, email=:email, senha=:senha  WHERE id=:id", $parametros);

        if (!$conn->affectedRows > 0) {
            throw new Exception('Erro ao tentar Atualizar os dados');
            return false;
        }
        return true;
    }
}

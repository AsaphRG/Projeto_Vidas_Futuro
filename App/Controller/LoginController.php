<?php

class LoginController
{
    function index()
    {
        try {
            $loader = new \Twig\Loader\FilesystemLoader('App/View');
            $twig = new \Twig\Environment($loader);
            $template = $twig->load('login.html');

            $conteudo = $template->render();
            echo $conteudo;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    function loginUsuario($parametros)
    {
        try {
            $resultadoLogin = Usuario::loginUsuario($parametros);
            return $resultadoLogin;

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    function iniciarSessaoUsuario($usuario)
    {
        Usuario::iniciarSessaoUsuario($usuario);
        return true;
    }
}

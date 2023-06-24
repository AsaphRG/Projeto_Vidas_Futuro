<?php

class LogoutController
{
    public function index()
    {
        $loader = new \Twig\Loader\FilesystemLoader('App/View');
        $twig = new \Twig\Environment($loader);
        $template = $twig->load('login.html');

        unset(
            $_SESSION['id'],
            $_SESSION['nome'],
            $_SESSION['email'],
            $_SESSION['senha']
        );

        $parametros['msg']  = " Deslogado com sucesso!";
        

        $conteudo = $template->render($parametros);
        echo $conteudo;
    }
}

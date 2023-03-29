<?php

class LogoutController
{
    public function index()
    {
        $loader = new \Twig\Loader\FilesystemLoader('App/View');
        $twig = new \Twig\Environment($loader);
        $template = $twig->load('erro.html');

        unset(
            $_SESSION['id'],
            $_SESSION['nome'],
            $_SESSION['email'],
            $_SESSION['senha']
        );

        $parametros['msg'] = $_SESSION['msg'] = "<h5 classe='alert-heading'>Deslogado com sucesso! <h5>";
        $url_destino = LOCAL_HOST . '/login';
        header("Location: $url_destino");

        $conteudo = $template->render($parametros);
        echo $conteudo;
    }
}

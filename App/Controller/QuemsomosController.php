<?php

class QuemsomosController
{

    public function index()
    {
        $loader = new \Twig\Loader\FilesystemLoader('App/View');
        $twig = new \Twig\Environment($loader);
        $template = $twig->load('quemsomos.html');

        $conteudo = $template->render();
        echo $conteudo;
    }
}

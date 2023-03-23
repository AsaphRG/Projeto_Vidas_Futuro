<?php

class PostagemController
{
    function index()
    {
        $loader = new \Twig\Loader\FilesystemLoader('App/View');
        $twig = new \Twig\Environment($loader);
        $template = $twig->load('postagem.html');

        $conteudo = $template->render();
        echo $conteudo;
    }
}
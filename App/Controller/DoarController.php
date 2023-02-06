<?php

class DoarController
{
    function index()
    {
        $loader = new \Twig\Loader\FilesystemLoader('App/View');
        $twig = new \Twig\Environment($loader);
        $template = $twig->load('doar.html');

        $conteudo = $template->render();
        echo $conteudo;
    }
}

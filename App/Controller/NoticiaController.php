<?php

class NoticiaController
{

    public function index()
    {
        $loader = new \Twig\Loader\FilesystemLoader('App/View');
        $twig = new \Twig\Environment($loader);
        $template = $twig->load('noticia.html');

        $conteudo = $template->render();
        echo $conteudo;
    }
}

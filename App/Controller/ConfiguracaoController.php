<?php

class ConfiguracaoController
{
    public function index()
    {

        try {

            if (!isset($_SESSION['id'])) {
                $_SESSION['msg'] = "<h5 classe='alert-heading'>Necessário entrar com usuário e senha para acessar essa área.<h5>";
                $url_destino = LOCAL_HOST.'/erro';
                header("Location: $url_destino");
            }

        $loader = new \Twig\Loader\FilesystemLoader('App/View');
        $twig = new \Twig\Environment($loader);
        $template = $twig->load('configuracao.html');



        $conteudo = $template->render();
        echo $conteudo;

        } catch (Exception $e) {
            
            echo $e->getmessage();
        }
        


        

    }
}
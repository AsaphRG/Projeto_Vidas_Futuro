<?php

class ListarusuarioController
{
    public function index()
    {
        try {

            if (!isset($_SESSION['id'])) {
                $_SESSION['msg'] = "<h5 classe='alert-heading'>Necessário entrar com usuário e senha para acessar essa área.<h5>";
                $url_destino = LOCAL_HOST.'/erro';
                header("Location: $url_destino");
            }

            $usuariosCadastrados = Usuario::buscarUsuarios();

            $loader = new \Twig\Loader\FilesystemLoader('App/View');
            $twig = new \Twig\Environment($loader);
            $template = $twig->load('listarusuario.html');

            $parametros = array();
            $parametros['usuarios'] = $usuariosCadastrados;

            /* echo '<pre>';
            print_r($usuariosCadastrados);
            exit; */

            $conteudo = $template->render($parametros);
            echo $conteudo;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}

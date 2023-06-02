<?php

class AtualizarUsuarioController
{
    public function index()
    {
        try {

            if (!isset($_SESSION['id'])) {
                $_SESSION['msg'] = "<h5 classe='alert-heading'>Necessário entrar com usuário e senha para acessar essa área.<h5>";
                $url_destino = LOCAL_HOST . '/erro';
                header("Location: $url_destino");
            }

            $SendAlterarUsuario = filter_input(INPUT_POST, 'SendAlterarUsuario');
            if ($SendAlterarUsuario) {
                $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

                

                if (!$dados['nome'] 
                || !$dados['email'] 
                || !$dados['senha']) {

                    $loader = new \Twig\Loader\FilesystemLoader('App/View');
                    $twig = new \Twig\Environment($loader);
                    $template = $twig->load('alterarUsuario.html');
                    

                    $parametros = array();
                    $parametros['nome'] = $dados['nome'];
                    $parametros['email'] = $dados['email'];
                    $parametros['senha'] = $dados['senha'];
                    $parametros['msg'] = 'Necessário entrar com usuário e senha para acessar essa área.';
        
                    /* echo '<pre>';
                    var_dump($usuario);
                    exit; */
        
                    $conteudo = $template->render($parametros);
                    echo $conteudo;
                }
                
            }
           
            
            /* $parametros = [
                ''
            ];
            $atualizarUsuario = Usuario::AtualizarUsuario($parametros);


            $loader = new \Twig\Loader\FilesystemLoader('App/View');
            $twig = new \Twig\Environment($loader);
            $template = $twig->load('listarusuario.html');

          

           

            $conteudo = $template->render();
            echo $conteudo; */
        } catch (Exception $e) {

            echo $e->getmessage();
        }
    }
}
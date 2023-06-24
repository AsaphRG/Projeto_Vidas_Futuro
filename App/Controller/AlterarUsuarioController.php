<?php

class AlterarUsuarioController
{
    public function index()
    {
        try {

            if (!isset($_SESSION['id'])) {
                $_SESSION['msg'] = "<h5 classe='alert-heading'>Necessário entrar com usuário e senha para acessar essa área.<h5>";
                $url_destino = LOCAL_HOST . '/erro';
                header("Location: $url_destino");
            }

            $id_array = [
                'id' => $_POST['id'],
            ];

            $usuario = Usuario::buscarUsuariosID($id_array);

            $loader = new \Twig\Loader\FilesystemLoader('App/View');
            $twig = new \Twig\Environment($loader);
            $template = $twig->load('alterarUsuario.html');

            $parametros = array();
            $parametros['id'] = $usuario[0]['id'];
            $parametros['nome'] = $usuario[0]['nome'];
            $parametros['email'] = $usuario[0]['email'];
            $parametros['senha'] = $usuario[0]['senha'];

            /* echo '<pre>';
            var_dump($usuario);
            exit; */

            $conteudo = $template->render($parametros);
            echo $conteudo;
        } catch (Exception $e) {

            echo $e->getmessage();
        }
    }
}

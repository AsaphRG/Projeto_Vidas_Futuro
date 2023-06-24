<?php

class UsuarioController
{
    public function index()
    {
        $sendCadUsuario = filter_input(INPUT_POST, 'SendCadUsuario');
        if ($sendCadUsuario) {

            $dados_usuario = filter_input_array(INPUT_POST, FILTER_DEFAULT);
            $dados = vazio($dados_usuario);

            if (!$dados) {
                $mensagem['msg'] = 'Existem campos em branco no formulário. Por favor, preencha todos os campos antes de prosseguir.';

                $loader = new \Twig\Loader\FilesystemLoader('App/View');
                $twig = new \Twig\Environment($loader);
                $template = $twig->load('configuracao.html');

                $conteudo = $template->render($mensagem);
                echo $conteudo;
            } else {
                $nome = limparStr($dados['usuario']);
                $email = filter_var($dados['email'], FILTER_VALIDATE_EMAIL);
                $senha = $dados['senha'];

                $parametros = [
                    'email' => $email,
                ];

                $result_email = Usuario::buscarEmail($parametros);
                if ($result_email) {
                    $mensagem['msg'] = 'E-mail já cadastrado no sistema!';

                    $loader = new \Twig\Loader\FilesystemLoader('App/View');
                    $twig = new \Twig\Environment($loader);
                    $template = $twig->load('configuracao.html');

                    $conteudo = $template->render($mensagem);
                    echo $conteudo;
                } else {
                    $recuperar_senha = hash('sha256', uniqid());

                    $parametros = [

                        ':nome' => $nome,
                        ':email' => $email,
                        ':senha' => password_hash($senha, PASSWORD_DEFAULT),
                        ':recuperar_senha' => $recuperar_senha,
                    ];

                    $cadastrar_usuario = Usuario::cadastrarUsuario($parametros);
                    if ($cadastrar_usuario) {
                        $mensagem['msg'] = 'Usuário Cadastrado com Sucesso!';

                        $loader = new \Twig\Loader\FilesystemLoader('App/View');
                        $twig = new \Twig\Environment($loader);
                        $template = $twig->load('configuracao.html');

                        $conteudo = $template->render($mensagem);
                        echo $conteudo;
                    }
                }
            }
        }
    }
}

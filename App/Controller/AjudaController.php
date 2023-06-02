<?php

class AjudaController
{
    function index()
    {

        try {

            $SendCadContato = filter_input(INPUT_POST, 'SendCadContato');
            if ($SendCadContato) {

                $parametro_dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
                $parametro_dados_contato = vazio($parametro_dados);

                if (!$parametro_dados_contato) {
                    $mensagem['msg'] = '<h5> Existem campos em branco no formulário. Por favor, preencha todos os campos antes de prosseguir. </h5>';

                    $loader = new \Twig\Loader\FilesystemLoader('App/View');
                    $twig = new \Twig\Environment($loader);
                    $template = $twig->load('ajuda.html');

                    $conteudo = $template->render($mensagem);
                    echo $conteudo;

                } else {

                    $nome = limparStr($parametro_dados_contato['nome']);
                    $email = filter_var($parametro_dados_contato['email'], FILTER_VALIDATE_EMAIL);
                    $telefone = validarTelefoneCelularEFixo($parametro_dados_contato['telefone']);

                    if ($email && $telefone) {

                        $parametro_dados_email = [

                            ':email' => $email,
                        ];

                        $BuscarEmailCadastrado = Ajuda::BuscarContatoPorEmail($parametro_dados_email);

                        if ($BuscarEmailCadastrado) {

                            $mensagem['msg'] = 'Os dados informados já estão cadastrados em nossa base. Por favor, tente novamente com informações diferentes.';

                        } else {
                            $parametros = [

                                ':nome' => $nome,
                                ':email' => $email,
                                ':telefone' => $telefone,
                            ];


                            $CadastrarContato = Ajuda::CadastrarContato($parametros);
                            if ($CadastrarContato) {
                                $mensagem['msg'] = 'Agradecemos por se afiliar à nossa ONG. Sua contribuição é valiosa para nossa missão. Obrigado!';
                            }
                        }



                        $loader = new \Twig\Loader\FilesystemLoader('App/View');
                        $twig = new \Twig\Environment($loader);
                        $template = $twig->load('ajuda.html');

                        $conteudo = $template->render($mensagem);
                        echo $conteudo;

                        
                    } else {
                        $mensagem['msg'] = 'O formato do telefone ou e-mail está incorreto. Por favor, verifique se os dados estão corretos e tente novamente.';

                        $loader = new \Twig\Loader\FilesystemLoader('App/View');
                        $twig = new \Twig\Environment($loader);
                        $template = $twig->load('ajuda.html');

                        $conteudo = $template->render($mensagem);
                        echo $conteudo;
                    }
                }

            } else {

                $loader = new \Twig\Loader\FilesystemLoader('App/View');
                $twig = new \Twig\Environment($loader);
                $template = $twig->load('ajuda.html');

                $conteudo = $template->render();
                echo $conteudo;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}

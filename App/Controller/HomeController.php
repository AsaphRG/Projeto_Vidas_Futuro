<?php

class HomeController
{
    function index()
    {

        try {

            $SendCadLead = filter_input(INPUT_POST, 'SendCadLead');
            if ($SendCadLead) {

                $parametro_email = filter_input(INPUT_POST, 'email');
                $parametros = [

                    ':email' => $parametro_email,
                ];

                $CadastrarLead = Lead::Cadastrarlead($parametros);
                if ($CadastrarLead) {

                    $mensagem['msg'] = 'Obrigado por se inscrever. Sua contribuição é importante para nós. Fique atento(a) para novidades e como sua doação está ajudando.';
                }

                $loader = new \Twig\Loader\FilesystemLoader('App/View');
                $twig = new \Twig\Environment($loader);
                $template = $twig->load('home.html');

                $conteudo = $template->render($mensagem);
                echo $conteudo;
            } else {

                $loader = new \Twig\Loader\FilesystemLoader('App/View');
                $twig = new \Twig\Environment($loader);
                $template = $twig->load('home.html');

                $conteudo = $template->render();
                echo $conteudo;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}

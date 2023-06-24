<?php

class ErroController
{
    public function index()
    {

        try {
            $loader = new \Twig\Loader\FilesystemLoader('App/View');
            $twig = new \Twig\Environment($loader);
            $template = $twig->load('erro.html');

            $parametros['link'] = LOCAL_HOST.'/login';

            echo "<div class='alert alert-danger' role='alert'>";
			if (isset($_SESSION['msg'])) {
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
				
			}else{
                
                $_SESSION['msg'] = "<h5 classe='alert-heading'> Página não encontrada! <h5>";
                echo $_SESSION['msg'];
				unset($_SESSION['msg']);
            }
            echo "</div>";
            
            $conteudo = $template->render($parametros);
            echo $conteudo;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        
    }
}
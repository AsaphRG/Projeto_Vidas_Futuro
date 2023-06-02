<?php

class Core
{
    function start($url_limpa)
    { 
        $acao = 'index';

        if(isset($url_limpa)){
            $urlArray = explode('/',$url_limpa);
            $controller = ucfirst($urlArray[0].'Controller');
        }else{
            $controller = 'HomeController';
        }
        
        

       if(!class_exists($controller)){
            $_SESSION['msg'] = "<h5 classe='alert-heading'> A página que você esta tentando acessar não existe! <h5>";
            $controller = 'ErroController';
       }

       
       $urlArray = explode('/',$url_limpa);
    
        if (count($urlArray) > 1 && isset($urlArray[0]) && $urlArray[1] != null) {

            $id = $urlArray[1];
            $url_id_array[] = $id;

           }else{
            $id = null;
            $url_id_array[] = $id;
           }
       
          
       call_user_func_array(array(new $controller, $acao), $url_id_array);
    }
    
}
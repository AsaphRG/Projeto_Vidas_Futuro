<?php

class Core

{
    function start($url)
    {
        $acao = 'index';
        if (isset($url)) {
            
            $controller = ucfirst($url.'Controller');
            

        }else{
            $controller = 'HomeController';
        }

        
        if(!class_exists($controller)){
            $controller = 'ErroController';
       }

       call_user_func_array(array(new $controller, $acao), array());
    }
    
}
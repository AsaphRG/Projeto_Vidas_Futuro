<?php
session_start();

require_once 'libs/Database/EasyPDO.php';
require_once 'libs/lib_valida.php';
require_once 'libs/lib_vazio.php';
require_once 'libs/lib_valida_tel.php';
require_once 'App/config/config.php';
require_once 'App/Core/Core.php';


require_once 'App/Controller/HomeController.php';
require_once 'App/Controller/ErroController.php';
require_once 'App/Controller/AjudarController.php';
require_once 'App/Controller/process_paymentController.php';
require_once 'App/Controller/DoarController.php';
require_once 'App/Controller/NoticiaController.php';
require_once 'App/Controller/QuemsomosController.php';
require_once 'App/Controller/LoginController.php';
require_once 'App/Controller/PostagemController.php';
require_once 'App/Controller/LogoutController.php';



require_once 'App/Model/Home.php';
require_once 'App/Model/Ajudar.php';
require_once 'App/Model/Usuario.php';

require_once 'vendor/autoload.php';

$url = filter_input(INPUT_GET, 'url');
$template = file_get_contents('App/Template/estrutura.html');

$sendLogin = filter_input(INPUT_POST, 'sendLogin');
if ($sendLogin) {
    $emailLogin = filter_input(INPUT_POST, 'email');
    $senhaLogin = filter_input(INPUT_POST, 'senha');

    $email = str_ireplace(' ', '', $emailLogin);
    $senha = str_ireplace(' ', '', $senhaLogin);

    $parametros = [

        ':email' => $email,
        ':senha' => $senha,
    ];
    
    $loginController = new LoginController();
    $usuario = $loginController->loginUsuario($parametros);
    

    if ($usuario) {

        $login = $loginController->iniciarSessaoUsuario($usuario);
        $url_destino = LOCAL_HOST.'/postagem';
        header("Location: $url_destino");
        
    }else{

        $_SESSION['msg'] = "<h5 classe='alert-heading'> Usuário ou senha inválido! <h5>";
        $url_destino = LOCAL_HOST.'/erro';
        header("Location: $url_destino");
    }

    
}



ob_start();
$core = New Core();
$result = $core->start($url);


$saida = ob_get_contents();
ob_end_clean();

$tplPronto = str_replace('{{area_dinamica}}', $saida, $template);

echo $tplPronto;



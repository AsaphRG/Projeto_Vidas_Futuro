<?php
session_start();

require_once 'libs/Database/EasyPDO.php';
require_once 'libs/lib_valida.php';
require_once 'libs/lib_vazio.php';
require_once 'libs/lib_valida_tel.php';
require_once 'App/config/config.php';
require_once 'App/Core/Core.php';


<<<<<<< HEAD
require_once '../Projeto_Vidas_Futuro/App/Controller/HomeController.php';
require_once '../Projeto_Vidas_Futuro/App/Controller/ErroController.php';
require_once '../Projeto_Vidas_Futuro/App/Controller/AjudarController.php';
//require_once '../Projeto_Vidas_Futuro/App/Controller/CobrancaController.php';
require_once '../Projeto_Vidas_Futuro/App/Controller/DoarController.php';
require_once '../Projeto_Vidas_Futuro/App/Controller/process_payment.php';
=======
require_once 'App/Controller/HomeController.php';
require_once 'App/Controller/ErroController.php';
require_once 'App/Controller/AjudarController.php';
require_once 'App/Controller/CobrancaController.php';
require_once 'App/Controller/DoarController.php';
>>>>>>> 65957244d29f9b868edebf35295161d86348d621


require_once 'App/Model/Home.php';
require_once 'App/Model/Ajudar.php';

require_once 'vendor/autoload.php';

$url = filter_input(INPUT_GET, 'url');
$template = file_get_contents('App/Template/estrutura.html');

ob_start();
$core = New Core();
$result = $core->start($url);


$saida = ob_get_contents();
ob_end_clean();

$tplPronto = str_replace('{{area_dinamica}}', $saida, $template);

echo $tplPronto;



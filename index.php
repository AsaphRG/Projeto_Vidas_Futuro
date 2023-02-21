<?php
session_start();

require_once 'libs/Database/EasyPDO.php';
require_once 'libs/lib_valida.php';
require_once 'libs/lib_vazio.php';
require_once 'libs/lib_valida_tel.php';
require_once 'App/Config/config.php';
require_once 'App/Core/Core.php';


require_once 'App/Controller/HomeController.php';
require_once 'App/Controller/ErroController.php';
require_once 'App/Controller/AjudarController.php';
require_once 'App/Controller/CobrancaController.php';
require_once 'App/Controller/DoarController.php';


require_once 'App/Model/Home.php';
require_once 'App/Model/Ajudar.php';

require_once 'vendor/autoload.php';

$url = filter_input(INPUT_GET, 'url');
$template = file_get_contents('App/template/estrutura.html');

ob_start();
$core = New Core();
$result = $core->start($url);


$saida = ob_get_contents();
ob_end_clean();

$tplPronto = str_replace('{{area_dinamica}}', $saida, $template);

echo $tplPronto;



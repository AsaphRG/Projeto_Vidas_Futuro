<?php
session_start();

require_once '../Projeto_Vidas_Futuro/libs/Database/EasyPDO.php';
require_once '../Projeto_Vidas_Futuro/libs/lib_valida.php';
require_once '../Projeto_Vidas_Futuro/libs/lib_vazio.php';
require_once '../Projeto_Vidas_Futuro/libs/lib_valida_tel.php';
require_once '../Projeto_Vidas_Futuro/App/Config/config.php';
require_once '../Projeto_Vidas_Futuro/App/Core/Core.php';


require_once '../Projeto_Vidas_Futuro/App/Controller/HomeController.php';
require_once '../Projeto_Vidas_Futuro/App/Controller/ErroController.php';
require_once '../Projeto_Vidas_Futuro/App/Controller/AjudarController.php';
require_once '../Projeto_Vidas_Futuro/App/Controller/CobrancaController.php';
require_once '../Projeto_Vidas_Futuro/App/Controller/DoarController.php';


require_once '../Projeto_Vidas_Futuro/App/Model/Home.php';
require_once '../Projeto_Vidas_Futuro/App/Model/Ajudar.php';

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



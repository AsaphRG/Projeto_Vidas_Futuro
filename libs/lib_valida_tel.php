<?php

function validarTelefoneCelularEFixo(string $valor): bool {
    
    //processa a string mantendo apenas números no valor de entrada.
    $valor = preg_replace("/[^0-9]/", "", $valor); 
        
    $lenValor = strlen($valor);
    
    //validando a quantidade de caracteres de telefone fixo ou celular.
    if($lenValor != 10 && $lenValor != 11)
        return false;
    
    //DD e número de telefone não podem começar com zero.
    if($valor[0] == "0" || $valor[2] == "0")
        return false;
    
    return true;
}
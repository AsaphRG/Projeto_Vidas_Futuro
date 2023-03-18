<?php

class LoginController
{
    function index()
    {
        $url_destino = 'login.html';
        header("Location: $url_destino");
    }
}

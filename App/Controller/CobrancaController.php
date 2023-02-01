<?php

class CobrancaController
{
    function indexa()
    {
        MercadoPago\SDK::setAccessToken('TEST-2576078414990249-013007-30bc3f5592e69fedfd0a7dd540530840-231662218');

        $payment = new MercadoPago\Payment();
        $payment->transaction_amount = 100;
        $payment->payer = array(
            "email" => "payer@email.com"
        );

        $payment->payment_method_id = "pix";
        $payment->external_reference = "SEU_REFERENCIA_EXTERNA";

        $payment->save();

        $copia_e_cola = $payment->point_of_interaction->transaction_data->qr_code;
        $ticket_url = $payment->point_of_interaction->transaction_data->ticket_url;
        $img_qrcode = 'data:image/png;base64,' . $payment->point_of_interaction->transaction_data->qr_code_base64;

        echo '<pre>';
        var_dump($payment);

        /*  echo $copia_e_cola . '<br>';
        echo $ticket_url . '<br>';
       // echo '<img src="'.$img_qrcode.'" >'; */

        exit;

        $loader = new \Twig\Loader\FilesystemLoader('App/View');
        $twig = new \Twig\Environment($loader);
        $template = $twig->load('cobranca.php');

        $conteudo = $template->render();
        echo $conteudo;
    }

    function index()
    {

      

            MercadoPago\SDK::setAccessToken('TEST-2576078414990249-013007-30bc3f5592e69fedfd0a7dd540530840-231662218');
            $payment_methods = MercadoPago\SDK::get("/v1/payment_methods");

            $payment = new MercadoPago\Payment();
            $payment->transaction_amount = 100;
            $payment->description = "Título do produto";
            $payment->payment_method_id = "bolbradesco";

            $payment->payer = array(
                "email" => "test@test.com",
                "first_name" => "Test",
                "last_name" => "User",
                "identification" => array(
                    "type" => "CPF",
                    "number" => "19119119100"
                ),
                "address" =>  array(
                    "zip_code" => "06233200",
                    "street_name" => "Av. das Nações Unidas",
                    "street_number" => "3003",
                    "neighborhood" => "Bonfim",
                    "city" => "Osasco",
                    "federal_unit" => "SP"
                )
            );

           

            $loader = new \Twig\Loader\FilesystemLoader('App/View');
            $twig = new \Twig\Environment($loader);
            $template = $twig->load('cobranca.html');

            $conteudo = $template->render(['payment_methods' => $payment_methods]);
            echo $conteudo;
        
    }
}

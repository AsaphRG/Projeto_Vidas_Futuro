<?php

class process_paymentController
{

    function indexcartao()
    {
        MercadoPago\SDK::setAccessToken("TEST-2576078414990249-013007-30bc3f5592e69fedfd0a7dd540530840-231662218");

        $payment = new MercadoPago\Payment();
        $payment->transaction_amount = (float)$_POST['transactionAmount'];
        $payment->token = $_POST['token'];
        $payment->description = $_POST['description'];
        $payment->installments = (int)$_POST['installments'];
        $payment->payment_method_id = $_POST['paymentMethodId'];
        $payment->issuer_id = (int)$_POST['issuer'];

  

        $payer = new MercadoPago\Payer();

        $payer->email = $_POST['email'];
        $payer->identification = array(
            "type" => $_POST['identificationType'],
            "number" => $_POST['identificationNumber'],
        );
        $payment->payer = $payer;

      $payment->save();

       /*  
        echo '<pre>';
        print_r($payment);
        exit; */


        $response = array(
            'status' => $payment->status,
            'status_detail' => $payment->status_detail,
            'id' => $payment->id
        );
        echo json_encode($response);
    }


    function index()
    {
        MercadoPago\SDK::setAccessToken('TEST-2576078414990249-013007-30bc3f5592e69fedfd0a7dd540530840-231662218');

        /* $payment = new MercadoPago\Payment();
        $payment->transaction_amount = 100;
        $payment->payer = array(
            "email" => "payer@email.com"
        );

        $payment->payment_method_id = "pix";
        $payment->external_reference = "SEU_REFERENCIA_EXTERNA";

        $payment->save();

        //$copia_e_cola = $payment->point_of_interaction->transaction_data->qr_code;
        $ticket_url = $payment->point_of_interaction->transaction_data->ticket_url;
        //$img_qrcode = 'data:image/png;base64,' . $payment->point_of_interaction->transaction_data->qr_code_base64;

        $url_destino = $ticket_url;
        header("Location: $url_destino");

        

        $loader = new \Twig\Loader\FilesystemLoader('App/View');
        $twig = new \Twig\Environment($loader);
        $template = $twig->load('cobranca.php');

        $conteudo = $template->render();
        echo $conteudo; */
        
        $_SESSION['doacao'] = $_POST['dinheiro'];

        $preference  = new MercadoPago\Preference();

        $item             = new MercadoPago\Item();
        $item->title      = 'Valor Doação:';
        $item->quantity   = 1;
        $item->unit_price = $_SESSION['doacao'];
      
        $preference->items = array($item);

      /*
        $preference->external_reference = 'EXTERNAL_REFERENCE';
      
         $preference->payment_methods = array(
              "excluded_payment_types" => array(
                     array(
                       "id" => "ticket",
                     )
               ),
            ); */
      
       // $preference->notification_url   = 'http://localhost.net/mercadopago/notification.php';
      
        // Salvar o objeto de Payment para gerar o Pix
        $preference->save();
      
        $url = $preference->init_point;
        $url_destino = $url;
        header("Location: $url_destino");

        


    }


    function indexboleto()
    {



        MercadoPago\SDK::setAccessToken('TEST-2576078414990249-013007-30bc3f5592e69fedfd0a7dd540530840-231662218');
        //$payment_methods = MercadoPago\SDK::get("/v1/payment_methods");

        $payment = new MercadoPago\Payment();
        //$payment->date_of_expiration = "2023-02-05T23:59:59.000-04:00";
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

        $payment->save();

        
        $loader = new \Twig\Loader\FilesystemLoader('App/View');
        $twig = new \Twig\Environment($loader);
        $template = $twig->load('cobranca.html');

        $conteudo = $template->render();
        echo $conteudo;
    }
}

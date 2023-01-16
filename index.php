
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/imagens/logo.png" type="image/x-icon">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/styleGlobal.css">
    <link rel="stylesheet" href="assets/css/pageIndex.css">

    <title>Instituto vidas pelo futuro</title>
</head>
<body>

    <?php include 'header.php'?>

    <main class="conteinerMasterIndex">
        <div class="conteinerApresentacao">
            <section class="conteinerLogo">
                <img class="logo" src="assets/imagens/logo.png" alt="Logo do site">
            </section>
            <section class="conteinerTexto">
                <div>
                    <h1>Instituto Vidas Pelo Futuro</h1>
                    <p class="apresentacao">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, ipsum. Labore deserunt tempore blanditiis ab ea facere minima quam enim illo fuga, iure molestiae temporibus quibusdam est sit aut id! Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis neque debitis repudiandae velit nemo deserunt maxime esse est suscipit tenetur incidunt illum, fugiat, natus repellendus quis laboriosam officiis sunt error!</p>
                </div>
            </section>
        </div>
        <div id="comoAtuamos"  class="conteinerMasterComoAtuamos">
            <div class="tituloComoAtuamos">
                <h2>COMO ATUAMOS</h2>
            
            <div class="conteinerConteudoComoAtuamos">
                
                <div class="conteinerViolenciaMulher">
                    <img class="imgviolenciaMulher" src="assets/imagens/domestic-violence.png" alt="Violência contra a mulher.">
                    <h4>Violência contra a mulher</h4>
                    <a href="">Conheça nosso trabalho...</a>
                </div>
                <div class="conteinerCestasBasicas">
                    <img class="imgCestasBasicas" src="assets/imagens/food-basket-prices-increase.png" alt="Cestas básicas">
                    <h4>Cestas básicas</h4>
                    <a href="">Conheça nosso trabalho...</a>
                </div>
                <div class="conteinerReforcoEscolar">
                    <img class="imgReforcoEscolar" src="assets/imagens/reforcoEscolar.jpg" alt="Reforço Escolar">
                    <h4>Reforço Escolar</h4>
                    <a href="">Conheça nosso trabalho...</a>
                </div>
                <div class="conteinerMuayThai">
                <img class="imgLuta" src="assets/imagens/boxing-3897488_640.jpg" alt="Luta">
                    <h4>Muay Thai</h4>
                    <a href="">Conheça nosso trabalho...</a>
                </div>
            </div>
        </div>
        </div>
        <div id="parceiros" class="conteinerMasterParceiros">
            <div class="tituloParceiros">
                <h2>Parceiros</h2>
                <div class="conteinerConteudoParceiros">
                    <section class="parceiros conteinerParceiros">
                        <img class="fotoParceiro" src="assets/imagens/gestao_de_pessoas.jpg" alt="Imagem do nosso parceiro">
                        <div class="ConteinerApresentacaoParceiro">
                            <h3>Nome da Empresa</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos eius magni reiciendis accusantium earum enim tempore libero perferendis dignissimos, quam quidem mollitia quo consequuntur in eveniet quod perspiciatis, quibusdam suscipit! Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae dolorum nobis adipisci tenetur dolor alias cupiditate possimus vel atque accusamus facere quae quam, magnam veniam. Sequi voluptate numquam nobis dicta? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis aliquid nihil voluptatem qui dolorem voluptates facere? Nostrum optio, vitae expedita, doloribus praesentium numquam maiores nisi, voluptas reprehenderit distinctio est alias?</p>
                            <a href="#" target="_blank">Conheça nossos parceiros</a>
                        </div>
                    </section>
                    <section class="parceiros conteinerParceiros">
                        <img class="fotoParceiro" src="assets/imagens/gestao_de_pessoas.jpg" alt="Imagem do nosso parceiro">
                        <div class="ConteinerApresentacaoParceiro">
                            <h3>Nome da Empresa</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos eius magni reiciendis accusantium earum enim tempore libero perferendis dignissimos, quam quidem mollitia quo consequuntur in eveniet quod perspiciatis, quibusdam suscipit! Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae dolorum nobis adipisci tenetur dolor alias cupiditate possimus vel atque accusamus facere quae quam, magnam veniam. Sequi voluptate numquam nobis dicta? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis aliquid nihil voluptatem qui dolorem voluptates facere? Nostrum optio, vitae expedita, doloribus praesentium numquam maiores nisi, voluptas reprehenderit distinctio est alias?</p>
                            <a href="#" target="_blank">Conheça nossos parceiros</a>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <section class="conteinerMasterNewsletter">
            <div class="conteudoNewsletter">
                <h2>ASSINE NOSSA NEWSLETTER</h2>
                <p>Enviaremos sempre os melhores matérias, conteúdos e notícias.</p>
                <form action="" method="post" class="formulario">
                    <div class="campoLado">
                        <label for="email">
                            <input type="email" name="email" id="email" class="campoEmail" placeholder="Informe seu melhor e-mail">
                        </label>
                        <button class="assinar" type="submit">ASSINAR</button>
                    </div>
                    <div class="avisos">
                        <div class="conteinerPoliticaPrivacidade">
                        <input class="campoPoliticaPrivacidade" required type="checkbox" name="politicaPrivacidade" id="politicaPrivacidade">
                        Estou de acordo com as &nbsp;<a href="http://" target="_blank"> Políticas de Privacidade</a>&nbsp; desse web Site.
                        </div>

                        <div class="aviso2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/></svg>
                        <p>Não utilizaremos suas informações de contato para enviar qualquer tipo de <b>SPAM</b></p>.
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <section class="voltarTopo">
        <a href="#header">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
            </svg>
        </a>
        </section>

    <?php include 'footer.php'?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
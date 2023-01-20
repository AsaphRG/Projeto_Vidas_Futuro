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
    <link rel="stylesheet" href="assets/css/pageComoAjudar.css">

    <title>Instituto vidas pelo futuro</title>
</head>
<body>

    <?php include 'header.php'?>
    <main class="conteinerMasterComoAjudar">
        <div class="conteinerConteudoComoAjudar">
        <h1 class="titlePageComoAjudar">Você pode ajudar o <b>Instituto vidas pelo futuro</b> das seguites formas: </h1>
        <section class="conteinerVoluntario">
            <div>
                <h2>Seja um voluntário</h2>
                <p class="textoVoluntario">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis dolor aliquam laboriosam voluptatem, ea distinctio ducimus molestiae veniam porro qui error. Voluptatibus dolor voluptatum nesciunt distinctio vitae quam, atque culpa. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur qui debitis dolores, sunt expedita quibusdam in cupiditate necessitatibus itaque, a molestiae iusto quod hic quo nisi. At nisi velit itaque.</p>
            </div>
            <div>
                <img class="imgVoluntario" src="./assets/imagens/volunteer.png" alt="imagem ilustrativa sobre ser voluntário.">
            </div>
        </section>
        <section class="conteinerParceiro">
            <div>
                <h2>Seja um dos nossos parceiros</h2>
                <p class="textoParceiro">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis dolor aliquam laboriosam voluptatem, ea distinctio ducimus molestiae veniam porro qui error. Voluptatibus dolor voluptatum nesciunt distinctio vitae quam, atque culpa. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur qui debitis dolores, sunt expedita quibusdam in cupiditate necessitatibus itaque, a molestiae iusto quod hic quo nisi. At nisi velit itaque.</p>
            </div>
            <div>
                <img class="imgParceiro" src="./assets/imagens/teamwork.png" alt="imagem ilustrativa sobre ser parceiro.">
            </div>
        </section>
        <section class="conteinerDoar">
            <div>
                <h2>Nos ajude através de doação</h2>
                <p class="textoDoar">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis dolor aliquam laboriosam voluptatem, ea distinctio ducimus molestiae veniam porro qui error. Voluptatibus dolor voluptatum nesciunt distinctio vitae quam, atque culpa. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur qui debitis dolores, sunt expedita quibusdam in cupiditate necessitatibus itaque, a molestiae iusto quod hic quo nisi. At nisi velit itaque.</p>
            </div>
            <div>
                <img class="imgDoar" src="./assets/imagens/gift.png" alt="imagem ilustrativa sobre doação.">
            </div>
        </section>
        <section class="conteinerCrianca">
            <div>
                <h2>Apadrinhe uma criança</h2>
                <p class="textoCrianca">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis dolor aliquam laboriosam voluptatem, ea distinctio ducimus molestiae veniam porro qui error. Voluptatibus dolor voluptatum nesciunt distinctio vitae quam, atque culpa. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur qui debitis dolores, sunt expedita quibusdam in cupiditate necessitatibus itaque, a molestiae iusto quod hic quo nisi. At nisi velit itaque.</p>
            </div>
            <div>
                <img class="imgCrianca" src="./assets/imagens/kids-160168_1280.png" alt="imagem ilustrativa de crianças.">
            </div>
        </section>
        <section class="conteinerFormulario">
            <h2>Ficou Interessado?</h2>
            <p>Preencha os campos abaixo e entraremos em contato com você.</p>
            <form class="formularioContato" action="" method="post">
                <label for="nome">
                    <input type="text" name="nome" id="nome" placeholder="Nome">
                </label>
                <label for="email">
                    <input type="email" name="email" id="email" placeholder="email">
                </label>
                <label for="telefone">
                    <input type="tel" name="telefone" id="telefone" placeholder="Telefone">
                </label>
                <button class="botaoFormularioContatos" type="submit">Enviar</button>
            </form>
        </section>
        </div>

    </main>

    <?php include 'footer.php'?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
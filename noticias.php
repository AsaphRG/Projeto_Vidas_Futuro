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
    <link rel="stylesheet" href="assets/css/pageNoticias.css">

    <title>Instituto vidas pelo futuro</title>
</head>
<body>

    <?php include 'header.php'?>

    <main class="conteinerMasterNoticias">
      <div class="conteudoPageNoticias">
          <section class="conteinerConteudoNoticias">
            <div class="carrosselPageNoticias">
                <div id="carouselExampleCaptions" class="carousel slide">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner conteinerCarousel">
                    <div class="carousel-item conteudoCarousel active">
                      <img src="assets/imagens/gestao_de_pessoas.jpg" class="imgCarousel d-block w-90" height="500" alt="...">
                      <div class="carouselLegenda carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                      </div>
                    </div>
                    <div class="carousel-item conteudoCarousel">
                      <img src="assets/imagens/gestao_de_pessoas.jpg" class="imgCarousel d-block w-90" height="500" alt="...">
                      <div class="carouselLegenda carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                      </div>
                    </div>
                    <div class="carousel-item conteudoCarousel">
                      <img src="assets/imagens/gestao_de_pessoas.jpg" class="imgCarousel d-block w-90" height="500" alt="...">
                      <div class="carouselLegenda carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                      </div>
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
            </div>
            </section>
            <section class="conteinerMenuNoticias">
                <div class="conteudoMenuNoticias">
                    <div class="areaPesquisa">
                      <label for="pesquisar">
                          <input type="search" name="pesquisar" id="pesquisar" placeholder="Pesquisar" class="campoPesquisar">
                      </label>
                      <div class="conteinerbuttonPesquisar"><button type="button" class="buttonPesquisar"><i class="bi bi-search"></i></button></div>
                    </div>
                    <div class="areaCategoria">
                      <label for="categoria"></label>
                      <select id="categoria" name="categoria">
                        <option value="escolha">Ações da ONG...</option>
                        <option value="violencia">Violência contra a mulher</option>
                        <option value="cestas">Cestas Básicas</option>
                        <option value="luta">Muay Thai</option>
                        <option value="reforço">Reforço escolar</option>
                      </select>
                    </div>
                </div>
            </section>
            <section class="conteinerPublicacaoNoticias">
              <div class="conteudoPublicacaoNoticias">
                <div>
                <div class="card" style="width: 18rem;">
                  <img src="..." class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
                </div>
                <div class="card" style="width: 18rem;">
                  <img src="..." class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
                </div>
                <div class="card" style="width: 18rem;">
                  <img src="..." class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
                </div>
              </div>
            </section>
          </div>
    </main>

    <?php include 'footer.php'?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
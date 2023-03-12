<?php include 'header.php'?>
    <link rel="stylesheet" href="assets/css/pageNoticias.css">
</head>
<body>
  <?php include 'menu.php' ?>
  <main class="conteinerMasterNoticias">
      <div class="conteudoPageNoticias">
          <section class="conteinerMenuNoticias">
            <div class="conteudoCategorias">
              <div>
                <label for="violencia">Violência contra a mulher</label>
                <input type="radio" name="categorias" id="violencia">
              </div>
              <div>
                <label for="luta">Muay Thai</label>
                <input type="radio" name="categorias" id="luta">
              </div>
              <div>
                <label for="cestas">Cestas Básicas</label>
                <input type="radio" name="categorias" id="cestas">
              </div>
              <div>
                <label for="reforço">Reforço Escolar</label>
                <input type="radio" name="categorias" id="reforço">
              </div>
            </div>
          </section>
          <section class="conteinerConteudoNoticias">
          <div class="carrosselPageNoticias">
              <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="assets/imagens/gestao_de_pessoas.jpg" class="imgCarousel d-block w-100" alt="...">
                    <div class="carouselLegenda carousel-caption d-none d-md-block">
                      <h5>First slide label</h5>
                      <p>Some representative placeholder content for the first slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="assets/imagens/gestao_de_pessoas.jpg" class="imgCarousel d-block w-100" alt="...">
                    <div class="carouselLegenda carousel-caption d-none d-md-block">
                      <h5>Second slide label</h5>
                      <p>Some representative placeholder content for the second slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="assets/imagens/gestao_de_pessoas.jpg" class="imgCarousel d-block w-100" alt="...">
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
      </div>
  </main>
  <?php include 'footer.php'?>

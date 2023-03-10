<?php include 'head.php' ?>
    <link rel="stylesheet" href="assets/css/pageDoar.css">
</head>

<body>
    <?php include 'menu.php'?>
    <main class="conteinerMasterDoar">
        <form method="POST">
            <div class="conteudoFormularioDoar">
                <div class="conteinerTextTitle">
                    <h2>Doe qualquer valor e ajude com este <b>gesto</b> a proporcionar qualidade de vida, respeito e felicidade.</h2> <!-- Contudo, doando 30 reais você poderá está contribuindo para ajudar uma criança ou adolescente ao acesso a atividades esportivas/cultural.</h2> -->
                </div>
                <div class="formaDoacao">
                    <h5>Escolha a forma de doação:</h5>
                    <div>
                        <div>
                            <input type="radio" name="formaDoacao" id="cartao">
                            <label for="cartao">Cartão</label>
                        </div>
                        <div>
                            <input type="radio" name="formaDoacao" id="pix">
                            <label for="pix">Pix</label>
                        </div>
                        <div>
                            <input type="radio" name="formaDoacao" id="boleto">
                            <label for="boleto">Boleto</label>
                        </div>
                    </div>
                </div>
                <div class="quantiaDada">
                    <h5>Quanto deseja doar:</h5>
                    <div>
                            <label for="dinheiro">
                            <input type="number" name="dinheiro" id="dinheiro" class="campoDinheiro" value="30">
                            <div class="iconDinheiro">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cash-stack" viewBox="0 0 16 16">
                                    <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1H1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                                    <path d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V5zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2H3z" />
                                </svg>
                        </label>
                    </div>
                </div>
            </div>

            <div class="conteinerFormasDoacao">
                <div class="cartaoDoacao">
                    <h2>Cartão</h2>
                    <div class="conteinerCartao">
                        <div class="cartaoConteudo">
                            <div class="conteinerEmail">
                                <label for="email">
                                    <input type="email" name="email" id="email" class="emailCampo" placeholder="Email">
                                    <div class="iconEmail">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                        </svg>
                                    </div>
                                </label>
                            </div>
                            <div class="conteinerNome">
                                <label for="nome">
                                    <input type="text" name="nome" id="nome" class="campoNome" placeholder="Seu nome como consta no cartão">
                                    <div class="iconNome">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                        </svg>
                                    </div>
                                </label>
                            </div>
                            <div class="conteinerNumCartao">
                                <label for="numero">
                                    <input type="number" name="numero" id="numero" class="campoNumero" placeholder="Número do cartão">
                                    <div class="iconcartao">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z" />
                                            <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z" />
                                        </svg>
                                    </div>
                                </label>
                            </div>

                            <div class="conteinerValidadeCartao">
                                <label for="validade">
                                    <input type="date" name="validade" id="validade" class="campoValidade">
                                </label>
                            </div>

                            <div class="conteinerCodSeguranca">
                                <label for="codSeguranca">
                                    <input type="number" name="codSeguranca" id="codSeguranca" class="campoCodSeguranca" placeholder="Código de Segurança">
                                    <div class="iconCadeado">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                                            <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
                                        </svg>
                                    </div>
                                </label>
                            </div>
                            <div class="conteinerBandeiraCartao">
                                <div>
                                    <p>Informe a bandeira do seu Cartão</p>
                                </div>
                                <div class="conteudoBandeiras">
                                    <div class="escolhaBandeira">
                                        <label for="visa">
                                            <img class="bandeira" src="assets/imagens/bandeirasCartoes/visa.png" width="50" alt="imagem da bandeira visa">
                                            <input type="radio" name="bandeira" id="visa">
                                        </label>
                                    </div>
                                    <div class="escolhaBandeira">
                                        <label for="mastercard">
                                            <img class="bandeira" src="assets/imagens/bandeirasCartoes/mastercard.png" width="50" alt="imagem da bandeira mastercard">
                                            <input type="radio" name="bandeira" id="mastercard">
                                        </label>
                                    </div>
                                    <div class="escolhaBandeira">
                                        <label for="elo">
                                            <img class="bandeira" src="assets/imagens/bandeirasCartoes/elo.png" width="50" alt="imagem da bandeira elo">
                                            <input type="radio" name="bandeira" id="elo">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="conteinerDocumento">
                                <label for="documento">
                                    <input type="number" name="documento" id="documento" class="campoDocumento" placeholder="CPF/CNPJ">
                                    <div class="iconCarteira">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-wallet2" viewBox="0 0 16 16">
                                            <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z" />
                                        </svg>
                                    </div>
                                </label>
                            </div>

                            <div class="conteinerTelefone">
                                <label for="telefone">
                                    <input type="tel" name="telefone" id="telefone" class="campoTelefone" placeholder="Celular com DDD">
                                    <div class="iconTelefone">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                        </svg>
                                    </div>
                                </label>
                            </div>
                            <div>
                            </div>
                        </div>
                        <div class="condicoes">
                            <div>
                                <label for="valorMensal">
                                    <input type="checkbox" name="valorMensal" id="valorMensal">
                                    <span>Desejo continuar enviando este valor mensalmente</span>
                                </label>
                            </div>
                            <div>
                                <label for="doacaoAnonima">
                                    <input type="checkbox" name="doacaoAnonima" id="doacaoAnonima">
                                    <span>Não divulgar meu nome/empresa publicamente</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pixDoacao">
                    <h2>Pix</h2>
                    <div class="conteinerPix">
                        <div class="pixConteudo">
                            <div class="conteinerNomeCompleto">
                                <label for="nomeCompleto">
                                    <input type="text" name="nomeCompleto" id="nomeCompleto" class="campoNomeCompleto" placeholder="Nome Completo">
                                    <div class="iconNomeCompleto">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                        </svg>
                                    </div>
                                </label>
                            </div>
                            <div class="conteinerEmail">
                                <label for="emailPix">
                                    <input type="email" name="emailPix" id="emailPix" class="emailCampoPix" placeholder="Email">
                                    <div class="iconEmailPix">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                        </svg>
                                    </div>
                                </label>
                            </div>
                            <div class="conteinerDocumentoPix">
                                <label for="documentoPix">
                                    <input type="number" name="documentoPix" id="documentoPix" class="campoDocumentoPix" placeholder="CPF/CNPJ">
                                    <div class="iconCarteiraPix">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-wallet2" viewBox="0 0 16 16">
                                            <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z" />
                                        </svg>
                                    </div>
                                </label>
                            </div>
                            <div class="conteinerLocalizacaoPix">
                                <label for="localizacaoPix">
                                    <input type="number" name="localizacaoPix" id="localizacaoPix" class="campoLocalizacaoPix" placeholder="CEP">
                                    <div class="iconLocalizacaoPix">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                        </svg>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div class="condicoes">
                            <label for="doacaoAnonimaPix">
                                <input type="checkbox" name="doacaoAnonimaPix" id="doacaoAnonimaPix">
                                <span>Não divulgar meu nome/empresa publicamente</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="boletoDoacao">
                    <h2>Boleto</h2>
                    <div class="conteinerBoleto">
                        <div class="boletoConteudo">
                            <div class="conteinerNomeCompleto">
                                <label for="nomeCompletoBoleto">
                                    <input type="text" name="nomeCompletoBoleto" id="nomeCompletoBoleto" class="campoNomeCompletoBoleto" placeholder="Nome Completo">
                                    <div class="iconNomeCompletoBoleto">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                        </svg>
                                    </div>
                                </label>
                            </div>
                            <div class="conteinerEmail">
                                <label for="emailBoleto">
                                    <input type="email" name="emailBoleto" id="emailBoleto" class="emailCampoBoleto" placeholder="Email">
                                    <div class="iconEmailBoleto">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                        </svg>
                                    </div>
                                </label>
                            </div>
                            <div class="conteinerDocumentoBoleto">
                                <label for="documentoBoleto">
                                    <input type="number" name="documentoBoleto" id="documentoBoleto" class="campoDocumentoBoleto" placeholder="CPF/CNPJ">
                                    <div class="iconCarteiraBoleto">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-wallet2" viewBox="0 0 16 16">
                                            <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z" />
                                        </svg>
                                    </div>
                                </label>
                            </div>
                            <div class="conteinerLocalizacaoBoleto">
                                <label for="localizacaoBoleto">
                                    <input type="number" name="localizacaoBoleto" id="localizacaoBoleto" class="campoLocalizacaoBoleto" placeholder="CEP">
                                    <div class="iconLocalizacaoBoleto">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                        </svg>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div class="condicoes">
                            <div>
                                <label for="valorMensal">
                                    <input type="checkbox" name="valorMensal" id="valorMensal">
                                    <span>Desejo continuar enviando este valor mensalmente</span>
                                </label>
                            </div>
                            <div>
                                <label for="doacaoAnonimaBoleto">
                                    <input type="checkbox" name="doacaoAnonimaBoleto" id="doacaoAnonimaBoleto">
                                    <span>Não divulgar meu nome/empresa publicamente</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="conteinerBotaoDoar">
                <button class="buttonDoar" type="submit">Doar</button>
            </div>
        </form>
    </main>

    <?php include 'footer.php'?>

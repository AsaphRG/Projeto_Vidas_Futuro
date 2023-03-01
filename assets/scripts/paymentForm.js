function formBuilder(paymentMethod) {
    let box = document.querySelector(".conteinerFormasDoacao");

    let container = document.createElement("form");
    container.setAttribute("method", "GET");
    container.setAttribute("action", "");
    switch (paymentMethod) {
        case "credito":
            container.appendChild(title('Cartão'));
            container.appendChild(formFieldBig("E-mail", "cardholderEmail", "email", "Email", "form-checkout__cardholderEmail", 'M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z'));
            container.appendChild(formFieldBig("Titular do cartão", "nomeTitular", "nomeCompleto", "text", "M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"));
            container.appendChild(formFieldBig("Número do cartão", "cardNumber", "text", "Numero", "M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"));
            container.appendChild(formFieldBig("Mês de vencimento", "cardExpirationMonth", "text", "ValidadeCartao", "form-checkout__cardExpirationMonth"));
            container.appendChild(formFieldBig("Ano de vencimento", "cadExpirationYear", 'text', 'Validade', 'form-checkout__cardExpirationYear'));
            container.appendChild(formFieldBig('Código de segurança', 'securityCode', 'text', 'CodSeguranca', 'form-checkout__securityCode', 'M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z'));
            container.appendChild(formFieldBig(''));
            break;
        case "pix":
            container.appendChild(title('Pix'));
            container.appendChild(formFieldBig("Nome Completo", "nomeCompleto", 'text', 'NomeCompleto', 'nomeCompleto', 'M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.64C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z'));
            container.appendChild(formFieldBig('Email', 'emailAdress', 'text', 'Email', 'email', 'M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z'));
            container.appendChild(formFieldBig('CPF/CNPJ', 'documento', 'number', 'Documento', 'documento', 'M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z'));
            container.appendChild(formFieldBig('CEP', 'localizacao', 'number', 'Localizacao', 'localizacao', 'M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z'));
            container.appendChild(checkboxField('doacaoAnonima', 'doacaoAnonima'));
            break;
        case "boleto":
            container.appendChild(title("Boleto"));
            container.appendChild(formFieldBig('Nome Completo', 'nomeCompleto', 'text', 'NomeCompleto', 'M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z'));
            container.appendChild(formFieldBig('Email', 'email', 'text', 'Email', 'email', 'M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z'));
            container.appendChild(formFieldBig('CPF/CNPJ', 'documento', 'number', 'Documento', 'documento', 'M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z'));
            container.appendChild(formFieldBig('CEP', 'localizacao', 'number', 'localizacao', 'localizacao', 'M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z'));
            container.appendChild(checkboxField('doacaoAnonima', 'doacaoAnonima'));
            break;
    }
    box.innerHTML = "";
    box.appendChild(container);
}

function title(title) {
    let element = document.createElement('h2');
    element.innerHTML = title;

    return element;
}

function formFieldBig(userView, name, inputType, className, id, path) {
    let element = document.createElement("div");
    element.setAttribute("class", `conteiner${className}`);

    let elementLabel = document.createElement("label");
    elementLabel.setAttribute("for", id);
    elementLabel.setAttribute("class", `label${className}`);
    element.appendChild(elementLabel);

    let elementInput = document.createElement("input");
    elementInput.setAttribute("name", name);
    elementInput.setAttribute("type", inputType);
    elementInput.setAttribute("id", id);
    elementInput.setAttribute("class", `input${className}`);
    elementInput.setAttribute('placeholder', userView);
    elementLabel.appendChild(elementInput);

    let elementDiv = document.createElement("div");
    elementDiv.setAttribute("class", `icon${className}`);
    elementLabel.appendChild(elementDiv);

    let elementSvg = document.createElement("svg");
    elementSvg.setAttribute("xmlns", "http://www.w3.org/2000/svg");
    elementSvg.setAttribute("width", "20");
    elementSvg.setAttribute('height', '20');
    elementSvg.setAttribute('fill', 'currentColor');
    elementSvg.setAttribute('class', `bi bi-${className}`);
    elementSvg.setAttribute('viewBox', '0 0 16 16');
    elementDiv.appendChild(elementSvg);

    let elementPath = document.createElement('path');
    elementPath.setAttribute('d', path);
    elementSvg.appendChild(elementPath);

    return element;
}

function checkboxField(name, className) {
    let elementCheckbox = document.createElement('input');
    elementCheckbox.setAttribute('type', 'checkbox');
    elementCheckbox.setAttribute('class', className);
    elementCheckbox.setAttribute('name', name);
    
    return elementCheckbox;
}

/*
<div class="boletoDoacao">
    <h2>Boleto</h2>
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







<div class="cartaoDoacao">
    <h2>Cartão</h2>
    <div class="conteinerCartao">
        <div class="cartaoConteudo">
            <div class="conteinerDocumento">
                <label for="form-checkout__issuer">
                    <select name="issuer" id="form-checkout__issuer" class="campoCodSeguranca"></select>
                </label>
                <label for="form-checkout__identificationType">
                    <select name="identificationType" id="form-checkout__identificationType"
                        class="campoCodSeguranca"></select>
                </label>

            </div>

            <div class="conteinerNumCartao">
                <label for="form-checkout__identificationNumber">
                    <input type="text" name="identificationNumber" id="form-checkout__identificationNumber"
                        class="campoCodSeguranca" />
                </label>

                <label for="form-checkout__installments">
                    <select name="installments" id="form-checkout__installments" class="campoCodSeguranca"></select>
                </label>
            </div>

            <div class="conteinerTelefone">
                <label for="telefone">
                    <input type="tel" name="telefone" id="telefone" class="campoTelefone"
                        placeholder="Celular com DDD">
                    <div class="iconTelefone">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
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

/* Itens necessários

Cartão:
    - Email
    - Titular do cartão
    - Número do cartão
    - Mês de vencimento
    - Ano de vencimento
    - Código de segurança
    - Banco emissor
    - Tipo de documento
    - Número do documento
    - Parcelas
    - Celular
    - Valor

Pix:
    - Nome completo
    - Email
    - CPF
    - CEP
    - Valor

Boleto:
    - Nome
    - Email
    - CPF
    - CEP
    - Valor

Geral:
    - Email
    - Valor
*/



/* Listeners */

let creditCard = document.querySelector(".credito");
creditCard.addEventListener("click", function() {
    formBuilder("credito");
});

let pix = document.querySelector(".pix");
pix.addEventListener("click", function() {
    formBuilder("pix");
});

let boleto = document.querySelector(".boleto");
boleto.addEventListener("click", function() {
    formBuilder("boleto");
});
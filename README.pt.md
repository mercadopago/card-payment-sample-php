# Processamento de pagamento com cartão via Checkout Transparente
[English](README.md) / [Español](README.es.md)

## :computer: Tecnologias
- PHP 7.3.29
- Slim Framework v4
- [Composer](https://getcomposer.org/download) (dependency manager)

## 💡 Requisitos
- PHP 7.2.5 ou mais recente (você pode baixar o PHP [aqui](https://www.php.net/downloads)).
- [Composer](https://getcomposer.org/download) (dependency manager).
- [Leia nossas instruções](https://www.mercadopago.com/developers/pt/guides/overview#bookmark_el_desarrollo_con_c%C3%B3digo) sobre como criar uma aplicação no Painel de Desenvolvedores do Mercado Pago para obter a public key e o access token. Essas chaves irão te dar acesso às APIs do Mercado Pago.

## :gear: Instalação
1. Clone o projeto.
```bash
git clone https://github.com/mercadopago/card-payment-sample-php.git
```

2. Acesse a pasta `server` do projeto.
```bash
cd card-payment-sample-php/server
```

3. Instale as dependências necessárias usando o Composer.
```bash
composer install
```

## 🌟 Como executar
1. Acesse a pasta `server` do projeto.
```bash
cd card-payment-sample-php/server
```

2. Execute o seguinte comando para iniciar a aplicação:
```bash
MERCADO_PAGO_SAMPLE_PUBLIC_KEY=YOUR_PUBLIC_KEY MERCADO_PAGO_SAMPLE_ACCESS_TOKEN=YOUR_ACCESS_TOKEN php -S localhost:8080 server.php
```

3. Lembre-se de trocar os valores `YOUR_PUBLIC_KEY` e `YOUR_ACCESS_TOKEN` pelas [credenciais](https://www.mercadopago.com/developers/panel) da sua conta.

4. Acesse http://localhost:8080 em seu navegador.

### :test_tube: Testes
Em nossas [instruções de teste](https://www.mercadopago.com/developers/pt/guides/online-payments/checkout-api/testing) você irá encontrar **[cartões de crédito](https://www.mercadopago.com/developers/pt/guides/online-payments/checkout-api/testing#bookmark_cart%C3%B5es_de_teste)** que podem ser usados para simular o pagamento neste exemplo e um guia sobre como criar **[usuários de teste](https://www.mercadopago.com/developers/pt/guides/online-payments/checkout-api/testing#bookmark_como_criar_usu%C3%A1rios)**.

## :handshake: Contribuindo
Você pode contribuir com este projeto reportando problemas e bugs. Antes de abrir uma issue, leia nosso [código de conduta](CODE_OF_CONDUCT.md).

## :bookmark: Licença
MIT License. Copyright (c) 2021 - Mercado Pago <br/>
Para mais informações, consulte o arquivo [LICENSE](LICENSE).
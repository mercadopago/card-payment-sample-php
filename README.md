# Card payment processing with Checkout API
[Português](README.pt.md) / [Español](README.es.md)

## :computer: Technologies
- PHP 7.3.29
- Slim Framework v4
- [Composer](https://getcomposer.org/download) (dependency manager)

## 💡 Requirements
- PHP 7.2.5 or higher (you can download PHP [here](https://www.php.net/downloads)).
- [Composer](https://getcomposer.org/download) (dependency manager).
- [Read our instructions](https://www.mercadopago.com/developers/en/guides/overview#bookmark_el_desarrollo_con_c%C3%B3digo) on how to create an application at the Mercado Pago Developer Panel in order to acquire your public key and access token. They will grant you access to Mercado Pago's public APIs.

## :gear: Installation
1. Clone the project.
```bash
git clone https://github.com/mercadopago/card-payment-sample-php.git
```

2. Go to the `server` folder.
```bash
cd card-payment-sample-php/server
```

3. Install the required dependencies using Composer.
```bash
composer install
```

## 🌟 How to run it
1. Go to the `server` folder.
```bash
cd card-payment-sample-php/server
```

2. Run the following command to start the application:
```bash
MERCADO_PAGO_SAMPLE_PUBLIC_KEY=YOUR_PUBLIC_KEY MERCADO_PAGO_SAMPLE_ACCESS_TOKEN=YOUR_ACCESS_TOKEN php -S localhost:8080 server.php
```

3. Remember to replace the values of `YOUR_PUBLIC_KEY` and `YOUR_ACCESS_TOKEN` with the corresponding [credentials](https://www.mercadopago.com/developers/panel) from your account.

4. Navigate to http://localhost:8080 in your browser.

### :test_tube: Testing
On our [testing instructions](https://www.mercadopago.com/developers/en/guides/online-payments/checkout-api/testing) you'll find **[credit cards](https://www.mercadopago.com/developers/en/guides/online-payments/checkout-api/testing#bookmark_test_cards)** that can be used along with this sample and a guide on how to create **[test users](https://www.mercadopago.com/developers/en/guides/online-payments/checkout-api/testing#bookmark_how_to_create_users)**.

## :handshake: Contributing
You can contribute to this project by reporting problems and bugs. Before opening an issue, make sure to read our [code of conduct](CODE_OF_CONDUCT.md).

## :bookmark: License
MIT License. Copyright (c) 2021 - Mercado Pago <br/>
For more information, see the [LICENSE](LICENSE) file.
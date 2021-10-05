# Card payment processing with Checkout API

## Using a PHP server with simple routing

### Previous requirements
- PHP 7.2.5 or higher
- [Composer](https://getcomposer.org/download) dependency manager
- Read our [testing instructions](https://www.mercadopago.com/developers/en/guides/payments/api/testing)
- Get your credentials at [Mercado Pago Developers Panel](https://www.mercadopago.com/developers/panel)
    - Learn more about the credentials [here](https://www.mercadopago.com.br/developers/en/guides/online-payments/checkout-api/previous-requirements#bookmark_have_your_credentials_handy)

### How to run it
- Clone or download this project
- Open a terminal and go to `card-payment-php-sample/server` folder
- Run `composer install`
- Run `PUBLIC_KEY=YOUR_PUBLIC_KEY ACCESS_TOKEN=YOUR_ACCESS_TOKEN php -S localhost:8080 server.php`
    - Remember to replace values _YOUR_PUBLIC_KEY_ and _YOUR_ACCESS_TOKEN_ with the corresponding Credentials from your account.
- Navigate to http://localhost:8080 on your browser
- Done! Now test the integration :white_check_mark:

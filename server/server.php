<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require_once __DIR__  . '/vendor/autoload.php';

$app = AppFactory::create();

MercadoPago\SDK::setAccessToken($_ENV["ACCESS_TOKEN"]);

// serve html
$app->get('/', function (Request $request, Response $response, $args) {
    $loader = new FilesystemLoader(__DIR__ . '/../client');
    $twig = new Environment($loader);

    $response->getBody()->write($twig->render('index.html', ['public_key' => $_ENV["PUBLIC_KEY"]]));
    return $response;
});

// serve css
$app->get('/css/{name}', function (Request $request, Response $response, $args) {
    $mime_type = 'text/css';

    $response = $response->withHeader('Content-Type', $mime_type . '; charset=UTF-8');
    $response->getBody()->write(file_get_contents(__DIR__ . '/../client/css/' . $args['name']));
    return $response;
});

// serve javascript
$app->get('/js/{name}', function (Request $request, Response $response, $args) {
    $mime_type = 'application/javascript';

    $response->withHeader('Content-Type', $mime_type . '; charset=UTF-8');
    $response->getBody()->write(file_get_contents(__DIR__ . '/../client/js/' . $args['name']));
    return $response;
});

// serve images
$app->get('/img/{name}', function (Request $request, Response $response, $args) {
    $mime_type = 'image/png';

    $response->withHeader('Content-Type', $mime_type . '; charset=UTF-8');
    $response->getBody()->write(file_get_contents(__DIR__ . '/../client/img/' . $args['name']));
    return $response;
});

// process card payment
$app->post('/process_payment', function (Request $request, Response $response, $args) {
    $contents = json_decode(file_get_contents('php://input'), true);
    $parsed_request = $request->withParsedBody($contents);
    $parsed_body = $parsed_request->getParsedBody();

    $payment = new MercadoPago\Payment();
    $payment->transaction_amount = $parsed_body['transactionAmount'];
    $payment->token = $parsed_body['token'];
    $payment->description = $parsed_body['description'];
    $payment->installments = $parsed_body['installments'];
    $payment->payment_method_id = $parsed_body['paymentMethodId'];
    $payment->issuer_id = $parsed_body['issuerId'];

    $payer = new MercadoPago\Payer();
    $payer->email = $parsed_body['payer']['email'];
    $payer->identification = array(
        "type" => $parsed_body['payer']['identification']['type'],
        "number" => $parsed_body['payer']['identification']['number']
    );
    $payment->payer = $payer;

    $payment->save();

    $response_fields = array(
        'id' => $payment->id,
        'status' => $payment->status,
        'detail' => $payment->status_detail
    );

    $response_body = json_encode($response_fields);

    $response->getBody()->write($response_body);
    return $response->withHeader('Content-Type', 'application/json')->withStatus(201);
});

$app->run();

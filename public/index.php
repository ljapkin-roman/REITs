<?php
require "../vendor/autoload.php";
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Roma\ReiTs\core\Model;
use Roma\ReiTs\core\DB as Database;
use Roma\ReiTs\models\Model_User;
use Roma\ReiTs\models\Model_Flight;
use DI\Container;
use Roma\ReiTs\eloquent\classes\Flight;

$container = new DI\Container();


$app = AppFactory::create();
$database = new Database();
$model_flight = new Model_Flight($database);
$model_flight->fill_table();



//$model_flight = $container->get('\Roma\ReiTs\models\Model_Flight');






$app->get('/hello/{name}', function (Request $request, Response $response, $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");
    return $response;
});

// Run app
$app->run();

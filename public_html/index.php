<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$config['displayErrorDetails'] = true;
$config['addContentLengthHeader'] = false;
$app = new \Slim\App(['settings' => $config]);

$container = $app->getContainer();

//php - view 
$container['view'] = new \Slim\Views\PhpRenderer('../app/views/');
	
	

$app->get('/{page}', function (Request $request, Response $response, array $args) {
	if ($args['page'] == 'avtogaz' OR 'dostavka-gaza' OR 'ustanovka-gbo' OR 'price' OR 'gazgolder' OR 'contacts') {
		return $this->view->render($response, "/wrapper.php", [
			"page" => $args['page']
		]);
	}
		else {}
	});
$app->get('/', function (Request $request, Response $response, array $args) 
{
	 return $this->view->render($response, "/wrapper.php", [
    "page" => 'index'
]);
} );

$app->get('/{city}/', function (Request $request, Response $response, array $args) {
		return $this->view->render($response, "/wrapper.php", [
			"page" => 'index'
		]);
	});
$app->get('/{city}/{page}', function (Request $request, Response $response, array $args) {
		return $this->view->render($response, "/wrapper.php", [
			"page" => $args['page']
		]);
	});

$app->run();

<?php
require 'vendor/autoload.php';
require 'test.php';
use \Slim\App; 

	$app = new App(); 
	$app->map(['GET','POST'],'/', function ($request, $response)
	{
	error_log($request->getBody()->getContents()); 
	return
	$response->withJson(
	array('replies' => [array('type' => 'text', 'content' => 'Roger that')], 'conversation'
	=>array('memory' => array('key' => 'value'))));
	});
	
	$app->map(['GET','POST'],'/errors', function ($request, $response)
	{
		error_log($request->getBody()->getContents()); 
		return $response;
	});

$app->run();
?>
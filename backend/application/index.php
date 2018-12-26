<?php 

require "vendor/autoload.php"; 

// $app = new Slim\App(); 

$configuration = [
    'settings' => [
      'displayErrorDetails' => true,
  ],
];
$c = new \Slim\Container($configuration);
$app = new \Slim\App($c); $app->options('/{routes:.}', function($resquest, $response, $args){ 
  
  return $response; 
  
}); 
$app->add(function($request, $response, $next){ 
  
  $response = $next($request, $response); 
  
  return $response 
                  ->withHeader('Access-Control-Allow-Origin', "*") 
                  ->withHeader('Access-Control-Allow-Headers', "X-Requested-With, Content-Type, Accept, Origin, Authorization") 
                  ->withHeader('Access-Control-Allow-Methods', "GET, POST, PUT, DELETE, PATCH, OPTIONS"); 
  
}); 

$app->get('/', \Spacecraft\Http\Starships::class); 

$app->post('/', \Spacecraft\Http\Calculationofspacecraftstop::class); 

$app->run();
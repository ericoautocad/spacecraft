<?php 

require "vendor/autoload.php"; 

$configuration = [
    'settings' => [
      'displayErrorDetails' => true,
  ],
];
$c = new \Slim\Container($configuration); 

$application = new \Slim\App($c); 

$application->options('/{routes:.}', function($resquest, $response, $args){ 
  
  return $response; 
  
}); 

$application->add(function($request, $response, $next){ 
  
  $response = $next($request, $response); 
  
  return $response 
                  ->withHeader('Access-Control-Allow-Origin', "*") 
                  ->withHeader('Access-Control-Allow-Headers', "X-Requested-With, Content-Type, Accept, Origin, Authorization") 
                  ->withHeader('Access-Control-Allow-Methods', "GET, POST, PUT, DELETE, PATCH, OPTIONS"); 
  
}); 

$application->get('/', \Spacecraft\Http\Starships::class); 

$application->post('/', \Spacecraft\Http\Calculationofspacecraftstop::class); 

$application->run();
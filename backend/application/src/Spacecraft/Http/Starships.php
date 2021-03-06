<?php 

namespace Spacecraft\Http; 

use Psr\Container\ContainerInterface; 

class Starships 
{

    protected $container; 
    
    public function __construct(ContainerInterface $container) 
    { 
        
        $this->container = $container; 

    } 
    public function __invoke($request, $response, $args)
    { 
        $requestendpoint = "https://swapi.co/api/starships/"; 

        $httpclient = new \GuzzleHttp\Client(); 
        
        $collection = new \Spacecraft\Collection\Spacecraft($httpclient); 
        
        $listcollection = $collection->buildCollection($requestendpoint); 
        
        $response = $response->withStatus(200); 
        
        $response = $response->withHeader("Content-type", "application/json"); 
        
        return $response->withJson( $listcollection); 

    } 

} 
 

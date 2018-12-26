<?php 

namespace Spacecraft\Http; 

use Psr\Container\ContainerInterface; 

class Calculationofspacecraftstop 
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
        
        $factory = new \Spacecraft\Factory\FactoryStopCalculation(); 

        $stopcalculation = new \Spacecraft\Model\Spacecraftstopcalculation( $factory ); 
        
        $distance = $request->getParam("distance"); 

        $distance = intval($distance); 
        
        $listcollection = $stopcalculation->getInformacaoStopSpacecraft($listcollection, $distance); 
        
        $response = $response->withStatus(200); 
        
        $response = $response->withHeader("Content-type", "application/json"); 
        
        return $response->withJson( $listcollection); 

    } 

} 

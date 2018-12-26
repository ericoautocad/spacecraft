<?php 

namespace Spacecraft\Collection; 

class Spacecraft
{

    private $httpclient; 
    
    private $list = []; 
    
    public function __construct(\GuzzleHttp\Client $httpclient) 
    { 
        
        $this->httpclient = $httpclient; 

    } 
    
    public function buildCollection($requestendpoint) 
    {
        do{ 
            
            $responseclient = $this->httpclient->request("GET", $requestendpoint); 
            
            $result = json_decode($responseclient->getBody(), true); 
            
            $this->addItemsList($result); 
            
            $requestendpoint = $this->getResourceNextRecordsList($result); 

        }while( $requestendpoint != null); 
        
        return $this->list; 
        
    }
    
    public function getResourceNextRecordsList($result)
    {
        
        if(empty($result["next"]) == false){ 
                
            $requestendpoint = $result["next"]; 

        }else{ 
            
            $requestendpoint = null; 

        } 
        
        return $requestendpoint; 

    } 
    
    public function addItemsList($result)
    {
        if(empty($result["results"]) == false){ 
                
            $this->list = array_merge($this->list, $result["results"]); 
            
            return true;

        } 
        
        return false; 
        
    } 

} 

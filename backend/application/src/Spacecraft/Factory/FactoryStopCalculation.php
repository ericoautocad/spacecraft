<?php 

namespace Spacecraft\Factory; 

class FactoryStopCalculation
{

    public static function build($typetime)
    {
        
        if($typetime != "unknown"){ 
            
            $classnamestopcalculation = ucfirst($typetime); 
            
            $fullclassnamestopcalculation = "\\Spacecraft\\Strategy\\" . $classnamestopcalculation; 
            
            return new $fullclassnamestopcalculation; 

        }else{ 
            
            return null; 

        } 
        
    } 

} 

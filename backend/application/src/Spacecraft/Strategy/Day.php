<?php 

namespace Spacecraft\Strategy; 

class Day implements SpacecraftStopCalculationInterface 
{
    
    const HOUR_PER_DAY = 24; 
    
    public function getTotalStopSpacecraft($totaltime , $mglt, $distance )
    {
        
        if($distance != 0){ 
    		
    		return floor( $distance / ($totaltime * $mglt * self::HOUR_PER_DAY ) ); 

    	}else{ 
    		
    		return 0; 

    	} 
        
    } 

} 

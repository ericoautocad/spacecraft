<?php 

namespace Spacecraft\Strategy; 

class Year implements SpacecraftStopCalculationInterface 
{
    
    const HOURS_PER_YEAR = 8640; 
    
    public function getTotalStopSpacecraft($totaltime , $mglt, $distance)
    {
        
        if($distance != 0){ 
    		
    		return floor( $distance / ( $totaltime * $mglt * self::HOURS_PER_YEAR ) ); 

    	}else{ 
    		
    		return 0; 

    	} 
        
    } 

} 

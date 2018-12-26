<?php 

namespace Spacecraft\Strategy; 

class Month implements SpacecraftStopCalculationInterface 
{
    
    const HOURS_PER_MONTH = 720; 
    
    public function getTotalStopSpacecraft($totaltime , $mglt, $distance)
    {
        
        if($distance != 0){ 
    		
    		return floor( $distance / ( $totaltime * $mglt * self::HOURS_PER_MONTH ) ); 

    	}else{ 
    		
    		return 0; 

    	}  
        
    } 

} 

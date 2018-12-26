<?php 

namespace Spacecraft\Strategy; 

class Hour implements SpacecraftStopCalculationInterface 
{

    public function getTotalStopSpacecraft($totaltime , $mglt, $distance)
    {
        
    	if($distance != 0){ 
    		
    		return floor( $distance / ($mglt * $totaltime) ); 

    	}else{ 
    		
    		return 0; 

    	} 
        
    } 

} 

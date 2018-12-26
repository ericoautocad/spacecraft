<?php 

namespace Spacecraft\Strategy; 

class Hour implements SpacecraftStopCalculationInterface 
{

    public function getTotalStopSpacecraft($totaltime , $mglt, $distance)
    {
        
        return floor( $distance / ($mglt * $totaltime) ); 
        
    } 

} 

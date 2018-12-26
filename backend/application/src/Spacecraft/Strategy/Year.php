<?php 

namespace Spacecraft\Strategy; 

class Year implements SpacecraftStopCalculationInterface 
{
    
    const HOURS_PER_YEAR = 8640; 
    
    public function getTotalStopSpacecraft($totaltime , $mglt, $distance)
    {
        
        return floor( $distance / ( $totaltime * $mglt * self::HOURS_PER_YEAR ) ); 
        
    } 

} 

<?php 

namespace Spacecraft\Strategy; 

class Week implements SpacecraftStopCalculationInterface 
{
    const HOUR_PER_WEEK = 168; 

    public function getTotalStopSpacecraft($totaltime , $mglt, $distance )
    {
        
        return floor( $distance / ($totaltime * $mglt * self::HOUR_PER_WEEK ) ); 
        
    } 

} 

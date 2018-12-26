<?php 

namespace Spacecraft\Strategy; 

interface SpacecraftStopCalculationInterface 
{

    public function getTotalStopSpacecraft($totaltime, $mglt, $distance); 

} 

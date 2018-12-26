<?php 

namespace Spacecraft\Strategy; 

class WeekTest extends \PHPUnit_Framework_TestCase 
{
    
    private $instancetypetime; 
    
    public function setUp() 
    {
        
        $this->instancetypetime = new Week(); 

    }
    
    public function testGetTotalStopSpacecraftDistance1000000()
    {
        $totaltime = 5; 
        $mglt = 75; 
        $distance =1000000; 
        $expected  = 15; 
        $result = $this->instancetypetime->GetTotalStopSpacecraft($totaltime, $mglt, $distance); 
        $this->assertEquals($expected, $result); 
        
    } 
    
    public function testGetTotalStopSpacecraftDistance100000()
    {
        $totaltime = 5; 
        $mglt = 75; 
        $distance =100000; 
        $expected  = 1; 
        $result = $this->instancetypetime->GetTotalStopSpacecraft($totaltime, $mglt, $distance); 
        $this->assertEquals($expected, $result); 
        
    } 

} 

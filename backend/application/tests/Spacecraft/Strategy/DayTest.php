<?php 

namespace Spacecraft\Strategy; 

class DayTest extends \PHPUnit_Framework_TestCase 
{
    
    private $instancetypetime; 
    
    public function setUp() 
    {
        
        $this->instancetypetime = new Day(); 

    }
    
    public function testGetTotalStopSpacecraftDistance1000000()
    {
        $totaltime = 50; 
        $mglt = 75; 
        $distance =1000000; 
        $expected  = 11; 
        $result = $this->instancetypetime->GetTotalStopSpacecraft($totaltime, $mglt, $distance); 
        $this->assertEquals($expected, $result); 
        
    } 
    
    public function testGetTotalStopSpacecraftDistance100000()
    {
        $totaltime = 50; 
        $mglt = 75; 
        $distance =100000; 
        $expected  = 1; 
        $result = $this->instancetypetime->GetTotalStopSpacecraft($totaltime, $mglt, $distance); 
        $this->assertEquals($expected, $result); 
        
    } 

} 

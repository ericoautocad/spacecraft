<?php 

namespace Spacecraft\Strategy; 

class YearTest extends \PHPUnit_Framework_TestCase 
{
    
    private $instancetypetime; 
    
    public function setUp() 
    {
        
        $this->instancetypetime = new Year(); 

    }
    
    public function testGetTotalStopSpacecraftDistance1000000()
    {
        $totaltime = 5; 
        $mglt = 4; 
        $distance =1000000; 
        $expected  = 5; 
        $result = $this->instancetypetime->GetTotalStopSpacecraft($totaltime, $mglt, $distance); 
        $this->assertEquals($expected, $result); 
        
    } 
    
    public function testGetTotalStopSpacecraftDistance100000()
    {
        $totaltime = 5; 
        $mglt = 75; 
        $distance =100000; 
        $expected  = 0; 
        $result = $this->instancetypetime->GetTotalStopSpacecraft($totaltime, $mglt, $distance); 
        $this->assertEquals($expected, $result); 
        
    } 

} 

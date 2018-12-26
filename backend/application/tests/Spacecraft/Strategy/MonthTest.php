<?php 

namespace Spacecraft\Strategy; 

class MonthTest extends \PHPUnit_Framework_TestCase 
{
    
    private $instancetypetime; 
    
    public function setUp() 
    {
        
        $this->instancetypetime = new Month(); 

    }
    
    public function testGetTotalStopSpacecraftDistance1000000()
    {
        $totaltime = 1; 
        $mglt = 75; 
        $distance =1000000; 
        $expected  = 18; 
        $result = $this->instancetypetime->GetTotalStopSpacecraft($totaltime, $mglt, $distance); 
        $this->assertEquals($expected, $result); 
        
    } 
    
    public function testGetTotalStopSpacecraftDistance100000()
    {
        $totaltime = 1; 
        $mglt = 75; 
        $distance =100000; 
        $expected  = 1; 
        $result = $this->instancetypetime->GetTotalStopSpacecraft($totaltime, $mglt, $distance); 
        $this->assertEquals($expected, $result); 
        
    } 

} 

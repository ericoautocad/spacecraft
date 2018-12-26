<?php 

namespace Spacecraft\Factory; 

use Spacecraft\Strategy\Hour; 

use Spacecraft\Strategy\Day; 

use Spacecraft\Strategy\Week; 

use Spacecraft\Strategy\Month; 

use Spacecraft\Strategy\Year;

class FactoryStopCalculationTest extends \PHPUnit_Framework_TestCase 
{
    
    private $instancefactorystopcalculation; 
    
    public function setUp() 
    {
        
        $this->instancefactorystopcalculation = new FactoryStopCalculation(); 

    }
    
    public function testFactoryBuildInstanceHour()
    {
        $typetime = "hour"; 

        $expected = Hour::class; 
        
        $result = $this->instancefactorystopcalculation->build($typetime); 

        $this->assertInstanceOf($expected, $result); 
        
    } 
    
    public function testFactoryBuildInstanceDay()
    {
        $typetime = "day"; 

        $expected = Day::class; 
        
        $result = $this->instancefactorystopcalculation->build($typetime); 

        $this->assertInstanceOf($expected, $result); 
        
    } 
    
    public function testFactoryBuildInstanceWeek()
    {
        $typetime = "week"; 

        $expected = Week::class; 
        
        $result = $this->instancefactorystopcalculation->build($typetime); 

        $this->assertInstanceOf($expected, $result); 
        
    } 
    
    public function testFactoryBuildInstanceMonth()
    {
        $typetime = "month"; 

        $expected = Month::class; 
        
        $result = $this->instancefactorystopcalculation->build($typetime); 

        $this->assertInstanceOf($expected, $result); 
        
    } 
    
    public function testFactoryBuildInstanceYear()
    {
        $typetime = "year"; 

        $expected = Year::class; 
        
        $result = $this->instancefactorystopcalculation->build($typetime); 

        $this->assertInstanceOf($expected, $result); 
        
    } 
    public function testFactoryBuildInstanceInvalidTypeTime()
    {
        $typetime = "unknown"; 

        $expected = null; 
        
        $result = $this->instancefactorystopcalculation->build($typetime); 

        $this->assertEquals($expected, $result); 
        
    } 

} 

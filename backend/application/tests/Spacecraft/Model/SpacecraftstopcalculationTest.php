<?php 

namespace Spacecraft\Model; 

use Spacecraft\Factory\FactoryStopCalculation; 

use Spacecraft\Collection\Spacecraft; 

class SpacecraftStopCalculationTest extends \PHPUnit_Framework_TestCase 
{
    
    private $spacecraftstopcalculation; 
    
    private $spacecraft; 
    
    public function setUp() 
    {
       
        $factorystopcalculation = new FActoryStopCalculation(); 
        
        $clientspacecraft = new \GuzzleHttp\Client; 
        
        $this->spacecraft = new Spacecraft($clientspacecraft); 
        
        $this->spacecraftstopcalculation = new SpacecraftStopCalculation($factorystopcalculation); 

    } 
    
    public function testExtractionNumericPartOfConsumableTimeValid() 
    { 
        
        $consumables = "5 days"; 
        
        $expected = 5; 
        
        $result = $this->spacecraftstopcalculation->extractionNumericPartOfConsumableTime($consumables); 
        
        $this->assertEquals($expected, $result); 
        
    } 

    public function testExtractionNumericPartOfConsumableTimeInvalid() 
    { 
        
        $consumables = "unknown"; 
        
        $expected = "unknown"; 
        
        $result = $this->spacecraftstopcalculation->extractionNumericPartOfConsumableTime($consumables); 
        
        $this->assertEquals($expected, $result); 
        
    } 

    public function testExtractionTypeTimePartOfConsumableValid() 
    { 
        
        $consumables = "5 days"; 
        
        $expected = "day"; 
        
        $result = $this->spacecraftstopcalculation->extractionTypeTimePartOfConsumable($consumables); 
        
        $this->assertEquals($expected, $result); 
        
    } 

    public function testExtractionTypeTimePartOfConsumableInvalid() 
    { 
        
        $consumables = "unknown"; 
        
        $expected = "unknown"; 
        
        $result = $this->spacecraftstopcalculation->extractionTypeTimePartOfConsumable($consumables); 
        
        $this->assertEquals($expected, $result); 
        
    } 
    
    public function testGetInformacaoStopSpacecraft100000() 
    { 
        $endpoint = "https://swapi.co/api/starships/"; 
        
        $distance = 1000000; 
        
        $expected = true; 
        
        $collectionspacecraft = $this->spacecraft->buildCollection( $endpoint); 
        
        $listinfospacecraftstop = $this->spacecraftstopcalculation->getInformacaoStopSpacecraft($collectionspacecraft, $distance); 
        
        $result = !empty($listinfospacecraftstop) == true; 
        
        $this->assertEquals($expected, $result); 
        
    } 

} 

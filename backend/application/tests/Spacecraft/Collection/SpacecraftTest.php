<?php 

namespace Spacecraft\Collection; 

class SpacecraftTest extends \PHPUnit_Framework_TestCase 
{
    
    private $clientspacecraft; 
    
    private $spacecraft; 
    
    public function setUp() 
    {
        
        $clientspacecraft = new \GuzzleHttp\Client; 
        
        $this->spacecraft = new Spacecraft($clientspacecraft); 

    } 
    
    public function testGetResourceNextRecordsListValid() 
    { 
        $endpoint = "https://swapi.co/api/starships/"; 
        
        $resultresponse = ["next" => $endpoint ]; 
        
        $expected = $endpoint; 
        
        $result = $this->spacecraft->getResourceNextRecordsList($resultresponse); 
        
        $this->assertEquals($expected, $result); 
        
    } 
    
    public function testGetResourceNextRecordsListInvalid() 
    { 
        $resultresponse = ["next" => null ]; 
        
        $expected = null; 
        
        $result = $this->spacecraft->getResourceNextRecordsList($resultresponse); 
        
        $this->assertEquals($expected, $result); 
        
    } 
    
    public function testAddItemsListValid() 
    { 
        $informationspacecraft = ["name" => "Name spacecraft", "model" => "Model spacecraft", "consumables" => "10 Hours", "MGLT" => "75"]; 
        
        $informationspacecraftresult = [ $informationspacecraft ]; 
        
        $resultresponse = ["results" => $informationspacecraftresult ]; 
        
        $expected = true; 
        
        $result = $this->spacecraft->addItemsList($resultresponse); 
        
        $this->assertEquals($expected, $result); 
        
    } 
    
    public function testAddItemsListInvalid() 
    { 
        $resultresponse = ["results" => null ]; 
        
        $expected = false; 
        
        $result = $this->spacecraft->addItemsList($resultresponse); 
        
        $this->assertEquals($expected, $result); 
        
    } 
    
    public function testBuildCollection() 
    { 
        $endpoint = "https://swapi.co/api/starships/"; 
        
        $expected = true; 
        
        $resultresponse = $this->spacecraft->buildCollection( $endpoint); 
        
        $result = !empty($resultresponse) == true; 
        
        $this->assertEquals($expected, $result); 
        
    } 

} 


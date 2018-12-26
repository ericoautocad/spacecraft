<?php 

namespace Spacecraft\Model; 

use Spacecraft\Factory\FactoryStopCalculation;

class SpacecraftStopCalculation
{
    private $list = []; 
    
    private $factorystopcalculation = null; 
    
    private $patternconsumabletime = "/^([0-9]{1,})(\s)(hour|day|week|month|year)(s{0,1})$/"; 
    
    public function __construct(FactoryStopCalculation $factory)
    {
        
        $this->factorystopcalculation = $factory; 
        
    }
    
    public function getInformacaoStopSpacecraft($listinformationspacecraft, $distance )
    {
        
        foreach($listinformationspacecraft as $informationspacecraft){ 
           
            $this->addItemsList($informationspacecraft, $distance); 

        } 
        
        return $this->list; 
        
    } 
    
    public function extractionNumericPartOfConsumableTime($consumable)
    {
        $patternconsumable = $this->patternconsumabletime; 
        
        return preg_replace($patternconsumable, "$1", $consumable); 
        
    } 
    
    public function extractionTypeTimePartOfConsumable($consumable)
    {
        $patternconsumable = $this->patternconsumabletime; 
        
        return preg_replace($patternconsumable, "$3", $consumable); 
        
    } 
    
    public function addItemsList($informationspacecraft, $distance )
    {
        if($informationspacecraft["consumables"] != "unknown" && $informationspacecraft["MGLT"] != "unknown"){ 
                
            $numbertime = $this->extractionNumericPartOfConsumableTime($informationspacecraft["consumables"]); 

            $typetime = $this->extractionTypeTimePartOfConsumable($informationspacecraft["consumables"]); 
            
            $stopcalculationinstance = $this->factorystopcalculation::build($typetime); 
            
            $mglt = $informationspacecraft["MGLT"]; 
            
            $informationspacecraft["totalnumberofstop"] = $stopcalculationinstance->getTotalStopSpacecraft($numbertime, $mglt, $distance ); 

        }else{ 
            
            $informationspacecraft["totalnumberofstop"] = "unknown"; 

        } 

        $infospacecraft = ["name" => $informationspacecraft["name"], "totalnumberofstop" => $informationspacecraft["totalnumberofstop"] ];
        
        $this->list[] = $infospacecraft; 
        
    } 

} 

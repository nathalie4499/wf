<?php

// an abstract class LighterFactory

abstract class AbstractLighterFactory
{
    protected $resources;   
    public function addResources($type, $amount)
    {
       if(!isset($this->resources[$type]))
       {
           $this->resources[$type] = 0;  
        }
       $this->resources[$type] += $amount;
    }
    protected function consumeResource($type, $amount)
    {
        if(!isset($this->resources[$type]))
        {
           $this->resources[$type] = 0; 
        }
        $this->resources[$type] -= $amount;
    }
    abstract public function buildLighter();
}

// ManualLighterFactory
class ManualLighterFactory extends AbstractLighterFactory
{
     public function BuildLighter()
     {
        if(isset($this->resources['fuel']) && $this->resources['fuel'] > 0){
            $this->consumeResource('fuel', 1);
            return 'manual lighter'; 
        }
        return "no fuel";
     }  
}

//ElectricLighterFactory
class ElectricLighterFactory extends AbstractLighterFactory
{

    public function BuildLighter()
    {
        if(isset($this->resources['electricity']) && $this->resources['electricity'] > 0){
            $this->consumeResource('electricity', 1);  
            return 'electric lighter';
        }
        return "no electricity";
    }
}

$factory = new ManualLighterFactory();
$factory->addResources('fuel', 10);
echo $factory->buildLighter();

echo "\n";
$factory = new ElectricLighterFactory();
$factory->addResources('fuel', 10);
echo $factory->buildLighter();
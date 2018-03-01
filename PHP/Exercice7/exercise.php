<?php
function divide(int $int, $divisor) {
    if ($divisor == 0) throw new RuntimeException();
    
}
function arrayDivide(array $valuetodivide, $divisor) {
    try {
        foreach($valuetodivide as $value){
           divide et store dans un nouvel array; 
        }
    } catch(RuntimeException $exception) {
       return $valuetodivide;
    }
        
}

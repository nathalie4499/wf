<?php
function divide($arraytodivide, $divisor) {
    if ($divisor == 0) {
        throw new RuntimeException("Division by 0 is not allowed");
    } else {
        $result = $arraytodivide/ $divisor;
    }
    return $result;
}

function arrayDivide(array $valuetodivide, int $divisor) {
    $newarray = [];
    foreach($valuetodivide as $value){
        try {
          $newarray[] = $value/$divisor;
        } catch(RuntimeException $exception) {
            
            return $valuetodivide;
        }
           return $newarray;
        }
}
//arrayDivide([100, 5], [20, 2]);
//if ($divisor == 0) throw new RuntimeException("");
//array_push($newarray, $stored);

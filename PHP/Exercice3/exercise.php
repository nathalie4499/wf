<?php

$aResult = 0;
$bResult = 0;

foreach ($input as $turn ) {
    list($a, $b) = $turn;
    
    if($a >$b) {
        $aResult++;
    } else if ($b > $a) {
        $bResult++;
    } 
}

if ($aResult > $bResult) {
    $winner = 'A';
} else {
    $winner = 'B';
}
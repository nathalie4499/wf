<?php

function easterReverse($path) {
    $easteregg = fopen($path, 'r+');
    $fileContent = fread($easteregg, filesize($path)); 
    $middleFile = floor(strlen($fileContent) / 2);
    $secondStart = fseek($easteregg, $middleFile, SEEK_SET);
  
    $secondPart = substr($fileContent, $middleFile);
    //echo $secondPart;
    $reversePart = strrev($secondPart);
    //echo $reversePart;
    substr_replace ($secondPart, $reversePart, $secondStart);
    echo $easteregg;

    fclose($easteregg);
}
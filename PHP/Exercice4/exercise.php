<?php
//Enter your code here, enjoy!
function getAllMondaysOfMonth($year, $month){
    //create an array as requested
    $mondaysarray = [];
    
    //get first monday
    $currentMonth = DateTime::createFromFormat('Ym', $year.$month); //description du format de la date
    $firstMonday = new DateTime('first monday of '.$currentMonth->format('F Y')); // object datetime cannot be concatenated so we need a string
    
    //create interval to hold next monday
    $interval = DateInterval::createFromDateString('next monday');
    
    //get last monday
    $lastMonday = new DateTime('last monday of'.$currentMonth->format('F Y')); //where do we stop
    
    //condition while last monday is not in array then I add the first monday to the array
    while($firstMonday < $lastMonday) { //deux instructions
        $mondaysarray[] = $firstMonday->format('l j, M Y'); //push
        $firstMonday->add($interval); //ajouter l'interval qui est one week
    }
    return $mondaysarray; //fin de la fonction (sortie)
}
$list= getAllMondaysOfMonth(2018, 02);
var_dump($list);
var_dump($mondaysarray);

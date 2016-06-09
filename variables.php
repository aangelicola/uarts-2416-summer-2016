<?php

$firstName = "anthony";
$lastName = "angelicola<br>";
echo $firstName . " " . $lastName;

$firstNumber = 13;
$secondNumber = 13;
echo $firstNumber + $secondNumber;

$numOne = 27;
$numTwo = 33;

if ($numOne < 50){
    echo "27";
} elseif ($numTwo > 25){
    echo "33";
}

$brushCost = 3;
$brushes = 0;
while ($brushes <= 100){
    echo "Cost is" .$brushes*$brushCost. "<br>";
    $brushes=$brushes+10;
}


?>
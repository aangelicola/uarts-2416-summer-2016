<?php

$firstName = "anthony";
$lastName = "angelicola<br>";
echo $firstName . " " . $lastName;
echo "<br>";

$firstNumber = 13;
$secondNumber = 13;
echo $firstNumber + $secondNumber;
echo "<br>";

$numOne = 27;
$numTwo = 33;

if ($numOne < 50){
    echo "27";
} elseif ($numTwo > 25){
    echo "33";
}
echo "<br>";

$brushCost = 3;
$brushes = 0;
while ($brushes <= 100){
    echo "Cost is" .$brushes*$brushCost. "<br>";
    $brushes=$brushes+10;
}

for ($i=1;$i<101;){
    echo $i."<br>";
    $i++;
}

echo "<select>";
$states=array("NewJersey","NewYork","Pennsylvania","Delaware","Maryland");
foreach($states as $value) {
    echo " <option>" . $value . "</option> ";
}
echo "</select>";
echo "<br>";

$sC=array("New York"=>"New York", "New Jersey"=>"Trenton", "Pennsylvania"=>"Harrisburg");
foreach ($sC as $x=>$x_value) {
    echo "The Capitol of " . $x . " is " . $x_value;
    echo "<br>";
}

echo "<table";
$books=array(
    array("title"=>"t1", "price"=>"p1", "author"=>"a1"),
    array("title"=>"t2", "price"=>"p2", "author"=>"a2"),
    array("title"=>"t3", "price"=>"p3", "author"=>"a3"),
    array("title"=>"t4", "price"=>"p4", "author"=>"a4"),
    array("title"=>"t5", "price"=>"p5", "author"=>"a5"),
    array("title"=>"t6", "price"=>"p6", "author"=>"a6"),
    );
echo "</table";

?>
<?php

//exercise 1

//assign the return value of fix_names("EDWARD", "hertZOg") to a variable, which
//will be an array because that's what the function is returning

$names=fix_names("EDWARD", "hertzog");

//echo the first index of the above variable and echo the second index to give full name

echo "EDWARD";

echo "hertzog";




function fix_names($firstName, $lastName) {
	/*$n1 = ucfirst(strtolower($firstName));
	$ns2 = ucfirst(strtolower($lastName));
	return $n1 . "" . $ns2;*/

	//1. create an array

	//2. call the first ucfirst code and assign to array's 0 index

	//3. call the second ucfirst code and assign to the array's 1 index

	//4. return the array

}

//exercise 2



//exercise 3

echo "<ul>";
$states=array("New Jersey", "New York", "Pennsylvania");
for ($i = 0; $i < count($states); $i++){
 echo "<li>";
 echo str_replace("e", "x", $states[$i]);
 echo "</li>";
}
echo "</ul>";


//exercise 4

$tools=array("hammer", "saw", "chsiel", "plane", "wrench");
$comma_separated = implode(", ", $tools);
echo $comma_separated;

?>
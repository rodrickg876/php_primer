<?php
 $title = "Function";
include 'includes/header.php'
?>
<h1> Functions </h1>
<?php

    // Defining a Function

    function writemessage(){
        echo "You are really a nice person, have a nice day!<br/>";
        }
// calling the function
writemessage();

echo "<hr/>";

writemessage();

// Functions with parameters

function addfunction($num1, $num2){
    $sum = $num1 + $num2;
    $num2 = $num2 + 1;
    echo "the sum of $num1 and $num2 is: $sum <br/>";
}
/* Pass by reference - use ampersad in parameter*/
function changenum(&$num){
    $num= $num + 10;
    // $num + = 10;
}

function returnproduct($num1, $num2){
    $prod = $num1 * $num2;
    return $prod;
}

$num = 500;
addfunction(10, 20);
addfunction(10, $num);
addfunction('10', "50");

changenum($num);
echo $num . '<br/>';

$return_value = returnproduct(10, 200);
echo $return_value . '<br/>';

?>
<?php require 'includes/Footer.php' ?>
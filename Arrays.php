<?php
$title = "Array";
 include 'includes/header.php'
 ?>
<h1> Arrays </h1>
<?php
//this is a variable
    $num = 3;

    // an arrays
    //only one datatype
    $numbers = array(1,2,3,4,5,6,7,8,9,10,50,60,70,80,90,258);
    //you can access the value in a subscript of the array using the index
    echo $numbers[5];

    echo "<p>$numbers[9]</p>";

    $size = count ($numbers);
    echo "<p>Array Numbers is size: </p>";

    for($count = 0; $count < $size; $count++)
        echo"<p>$numbers[$count]</p>";
?>
<?php require 'includes/Footer.php' ?>
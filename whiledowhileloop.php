<?php
$title = "While Do-While Loop";
include 'includes/header.php'
?>
    <h1> While loops </h1>
    <?php
        $grade = 0;
        //infinite loop
        //while($grade < 10){
        //    echo'<p> I AM LESS THAN 10!<p>';
        //}
        while($grade < 10){
            echo '<p> I AM LESS THAN 10!</P>';
            $grade++;
        }
             echo 'EXIT THE LOOP!';
    ?>


    <h1> Do-While loops </h1>
    <?php
    //Post-Condition Loop
    $grade = 0;
        do{
            echo '<p> I AM do while loop</P>';
            $grade++;
        }while ($grade < 10);
        echo 'EXIT THE LOOP!';
    ?>


<?php require 'includes/Footer.php' ?>
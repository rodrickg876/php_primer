<?php 
$title = "If STatement";
include 'includes/header.php'
?>
<h1> If - Else Statement</h1>
    <h3 style="color: red"></h3>
   <?php

    // an if statement that will carry out an action based on the value of the variable.

    echo '<h2> If statement</h2>';

    $grade = 50;
    // ===, ==, <, >, <=, >=,
    if($grade >= 50){
        echo '<h3 style="color: green"> YOU HAVE PASSED</h3>';
    }
        else{
        echo '<h3 style="color: red"> YOU HAVE PASSED</h3>';

         }
         $grade = 'A';
         // if-else if-else
         if($grade == 'A'){
             echo '<h2 style="color: green"> YOU ARE A SUPERSTAR!</h2>';
            
             }
             elseif ($grade == 'B'){
                 echo '<h2 style="color: blue"> YOU DID WELL!</h2>';
         }
         else{
             echo '<h2 style="color: red"> YOU HAVE FAILED.....</H2>';
         }
    ?>
<?php require 'includes/Footer.php' ?>
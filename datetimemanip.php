<?php
$title = "Date and Time Manipulation";
include 'includes/header.php'
?>
<h1> Date and Time Manipulation </h1>


<?php
    $datenow = getdate();
    echo "Today's Date <br/>";
    echo $datenow['mday'] . '<br/>';
    echo $datenow['mon'] . "<br/>";
    echo $datenow['year'] . "<br/>";

    echo "Today's Date: " .  $datenow['mday'] . '/' . $datenow['mon'] . '/' . $datenow['year'];

?>
    
    <?php require 'includes/Footer.php' ?>
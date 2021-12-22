<?php
$title = "String Manipulation";
include 'includes/header.php'
?>
<h1> String Manipulation </h1>
    <?php
    //Conatenation of strings
        $phrase1 ="Student who came late";
        $phrase2 = " In class stand with Rock";
        $name = "rodrick gordon";
        echo $phrase1 . ", named Angela, ". $phrase2;
        echo '<br/>';
        echo '<hr/>';
        //string Transformation
        echo 'uppercase first letter: ' . ucfirst($name). '<br/>';
        echo 'uppercase first letter of each word: ' . ucwords($name). '<br/>';
        echo 'upper case: '. strtoupper($name). '<br/>';
        echo 'lower case: '. strtolower("This was all upper casename"). '<br/>'; 
        echo '<hr/>';
        echo 'Repeat string:' . str_repeat('a',10) . '<br/>';
        echo 'Repeat string - Nested Function: '. strtoupper(str_repeat('a',10)) . '<br/>';
        echo 'Get a Substring: ' . substr($name, 5, 10). '<br/>';

        echo 'Get position of string: ' . strpos($name, 'G'). '<br/>';
        // Returns Null
        // echo 'get position of string:' . strps($combine,'z'). '<br/>;
        echo 'Find Character "R": ' . strchr($name, 'R'). '<br/>';
        echo 'Find Character "r": ' . strchr($name, 'r'). '<br/>';
        echo 'Find Character "d": ' . strchr($name, 'd'). '<br/>';
        echo 'Find Character "i": ' . strchr($name, 'i'). '<br/>';

        echo 'Find Length of String: ' .strlen($name) . '<br/>';

        echo 'Without Trim: '. "A" . "B C D" . "E" . '<br/>';
        echo 'Trim spaces on both sides: '. "A" . trim("B C D") . "E" . '<br/>';
        echo 'Trim spaces to the left: '. "A" . trim("B C D") . "E" . '<br/>';
        echo 'Trim spaces to the right: '. "A" . trim("B C D") . "E" . '<br/>';

        echo 'Replace string with another: ' . str_replace("stand", "sit", $combine ) . '<br/>';
    ?>
<?php require 'includes/Footer.php' ?>
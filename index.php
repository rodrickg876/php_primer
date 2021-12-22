    <?php 
    $title = "Index";
    include 'includes/header.php'
    ?>
    <!-- basic html -->
    <h1>hello world</h1>
    <br/>
    <?php
        //printing to HTML using echo
        echo "hello PHP";
        echo "<br/>";
        echo "second line";
        echo "<br/>";
    ?>
    <?php
    //declare variable
    $name ="Rodrick Gordon";
    $age = '28';
    //echo variable
    echo $name;
    echo '<h1>my name is: '.$name .' </h1>';
    echo '<h1>my age is: '.$age .' </h1>';
    // Echo using double quotes and interpolation
    echo "<h1> my name is: $name </h1>";
?>
    <button type = "button" class ="btn btn-dark">Click Me!</button>
    <button type = "button" class ="btn btn-primary">Click Me!</button>
    <button type = "button" class ="btn btn-success">Click Me!</button>
    <a href="https://www.heroku.com" target="_blank" class ="btn btn-danger">Heruko.com</a>
    
<?php require 'includes/Footer.php' ?>
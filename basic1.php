<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP TUTORIALS ( hypertext preprocessor )</title>
</head>
<body>
    <div class="container">
        This is my php website

        <!-- to write code of php , use php syntax -->

        <!-- echo used here as print function , eco help to print the data  -->
       
       <?php
         echo "hello world , this is used to printing php"
        ?>

        <?php
         echo "hello world , dodi"
        ?>

        <!-- variables in php  -->

        <!-- variable name start with a dollar sign ($) -->
     
        <?php

        $variable1 = 34;
        $variable2 = 45;
        echo $variable1; 
        echo $variable2;

        Echo $variable1 + $variable2;

        // operators in php 
         
        // Arithmetic operators
        echo "<br>" ;
        echo "the value of variabe1 + variable2 is ";
        echo "<br>" ;
        Echo $variable1 + $variable2;
        // assignment operations
         
         $newvar = $variable1;
         echo "the value of new variable is ";
         echo $newvar;
         echo "<br>";
  
         echo "the value of new variable is ";
         $newvar += 1;
         echo $newvar;

         echo "<br>";

         echo "the value of new variable is ";
         $newvar *= 2;
         echo $newvar;

         echo "<br>";

        // comparision operators 

        echo "the value of 1==4" ;
        echo var_dump(1==4);

        // increment/decrement operators 
        
        echo "$variable1++" ;
        echo "$variable1--" ;
        echo "++$variable1++" ;
        echo "--$variable1++" ;

        // logical operators 

        // and &&
        // or ||
        // xor 
        // ! 

        $myvar = (false) and (true);
        echo "<br>";
        echo var_dump($myvar);

        ?>


    <?php

    // data types in php 

    // string 
    echo "<br>";
    $var = "this is a string ";
    echo var_dump($var);

    // integer
    echo "<br>";
    $var = 41;
    echo var_dump($var);
    // float 
    echo "<br>";
    $var = 56.9;
    echo var_dump($var);
    // boolean 
    echo "<br>";
    $var = true ;
    echo var_dump($var);
    // array 
    // object 

    echo "<br>";

    // to  define constant word

    define("pi" , 3.2);
    echo "pi";

    ?>










    </div>
</body>
</html>  
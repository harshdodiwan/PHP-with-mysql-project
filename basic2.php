<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php TUTORIALS</title>
</head>
<style>

.{
    margin: 0;
    padding: 0;
    box-sizing : border-box;
}
   
.container{
        max-width: 80%;
        background-color: grey;
        margin: auto;
        padding: 23px;
    }
</style>

<body>

    <!-- if else   -->

    <div class="container">
        <h1>lets learn about PHP</h1>
     this is container 
    <?php
    echo "<br>";
    $age=20;
    if($age>18){
        echo "you can go to party ";
    }
    else{
        echo "you can't go to party";
    }

    // array 
    echo "<br>";

    $languages= array("python" , "c++", "java", "php");
    echo $languages[3];

    echo "<br>";

    echo count($languages);

    echo "<br>";

    // loops 

    $a=0;
    while ($a <= 10) {
        echo "<br>";
        echo "the value of a is" ;
        echo $a;
        $a++ ;
    }

    echo "<br>";

    // $int = 0 ;
    // while ($int <= 1000) {
    //     echo"i love you tannu ";
    //     $int = $int+1;
    // }

    // funtions 

    function print5(){
        echo "five";

    }
    print5();
    print5();

    function print_num($numbers){
        echo "<br>  your number is" ;
        echo $numbers;    
    }

    print_num(56);
    print_num(568);


    // string in PHP 

    echo "<br>";
    echo "<br>";
    $str = "this";
    // echo $str;
    $lenn = strlen($str);
    echo "the length of string is ";
    echo $lenn;
   
   

    echo "<br>";
    echo "the number of word in string is ";


    echo "str_word_count"($str);

    echo "<br>";

    echo "reverse the string" . strrev($str). "thanx <br>";
    













    ?>

    </div>
</body>
</html>
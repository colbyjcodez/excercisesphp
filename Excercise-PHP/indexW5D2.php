<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <?php 
    $m = 500; // global scope
    
    function myTest() {
        echo "<p> I said she owes me $m </p>";
    };
    myTest();           
        $m = 250;
    echo "<p> She say she owes me $m </p>";

// string
$king = "Check Mate!";
$queen = "Check";

echo "<br>";
echo $king;
echo $queen;

//reverse
echo "<br>";
echo strrev($king);
echo "<br>";

//strpos
echo "<br>";
echo strpos ($king,$queen);

// replace
echo "<br>";
echo str_replace ($queen,"check twice",$king);

//interger
echo "<br>";
$m = 3350;
var_dump($m);

// float

$c = 21.21;
var_dump($c);

// boolean
echo "<br>";
$win = true;
$lose = false;
echo $lose;
echo $win;

//array
echo "<br>";
$mom = array ("boy", "girl", "dog");
var_dump($mom);


// object
echo "<br>";
class mom {
    function mom() {
        $this->child = "it is a boy";
    }
}

$grandmother = new mom();

echo $grandmother->mother->child;
print_r ($grandmother->child);

//constant 
define("WHAUPDOE!", "How is it going family?");
    echo WHAUPDOE;

define("WHAUPDOE!", "How is it going family?, true");
    echo whaupdoe;

//------operators------//
$x=10;
echo $x;

//add
$x = 20;
$x += 100;
echo $x;

//subtract
$x = 50;
$x -= 30;
echo $x;

//mutiply
$x = 10;
$y = 6;
echo $x * $y;

//division
$x = 10;
$x /= 5;
echo $x;


// mod
$x = 15;
$x %= 4;
echo $x;

//------- Comparison Op -----//

//equals
$x = 100;
$y = "100";
var_dump ($x == $y);

//indentical(===)
$x = 100;
$y = "100";
var_dump ($x === $y);

// Not equal
$x = 100;
$y = "100";
var_dump ($x != $y);

//Not identical
$x = 100;
$y = "100";
var_dump ($x !== $y);


//greater than equal to
$x = 50;
$y = 50;
var_dump($x >= $y);

//less than or equal to
$x = 50;
$y = 50;
var_dump($x <= $y);

//------ increment ---------//

//post-increment
for ($x = 0; $x < 9; ++$x){
    echo ($x);
}
$x = 10;
echo ++$x;

//pre-increment 
for ($x = 0; $x < 9; $x++){
    echo ($x);
}
$x = 10;
echo $x++;


    ?>
<body>
    
</body>
</html>
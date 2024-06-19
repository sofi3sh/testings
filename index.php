<?php

echo "Hello World";

$a = 10; // integer
$b = "Hello"; // string
$c = true; // boolean
$d = null; // null
$r; // undefined
$l = '';// empty string

$a = '10';// string

 $arr = [1, 2, 3, 4, 5]; // array
 $obj = new stdClass(); // object
 echo '<hr>';

 var_dump($arr);
 echo '<hr>';
 var_dump($obj);
 echo '<hr>';
echo $a;
echo '<hr>';


$ff = $a . $b;
echo $ff;
echo '<hr>';
echo `$a`. '$a' ."$a";

$test = "test";
var_dump($test);

echo '<p class="test">Hello World</p>';

echo '<p class="test">'.$a.'</p>';
echo '<p class="test">'."$a".'</p>';

?>

<style>
    .test {
        color: red;
    }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>
    Hello World
</p>  
<span>gfhfjhg</span>  

</body>
</html>
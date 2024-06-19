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
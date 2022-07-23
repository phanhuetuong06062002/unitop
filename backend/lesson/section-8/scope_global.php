<?php
$a = 5;
$b = 10;
function sum(){
    global $a,$b;
    return $a + $b;
}
echo sum();
echo "<hr>";
function Sum2(){
    return $GLOBALS['a']+ $GLOBALS['b'];
}
echo Sum2();
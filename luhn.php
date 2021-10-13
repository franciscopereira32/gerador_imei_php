<?php
function Luhn ($number) {

$stack = 0;
$number = str_split(strrev($number));

foreach ($number as $key => $value)
{
    if ($key % 2 == 0)
    {
        $value = array_sum(str_split($value * 2));
    }
    $stack += $value;
}
$stack %= 10;

if ($stack != 0)
{
    $stack -= 10;     $stack = abs($stack);
}


$number = implode('', array_reverse($number));
$number = $number . strval($stack);

return ($number); 
}


#for 
#echo Luhn(3);
?>
<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2019/2/27
 * Time: 8:36
 */

echo Add(1111,2221);


function Add($num1, $num2)
{
    while(($num1 & $num2) != 0){
        $tmp = $num1 ^ $num2;
        $num2 = ($num1 & $num2) << 1;
        $num1 = $tmp;
    }
    return $num1|$num2;
}
<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2019/2/20
 * Time: 8:41
 */

/**
 * @param $index
 * @return bool
 *判断改数是否是丑数
 */
function GetUglyNumber_Solution($index)
{
    $num = [2,3,5];
    $chu = $index;

    if($index == 1) return true;

    for ($i = 0; $i < count($num); $i++){
        while($chu % $num[$i] == 0){
            $shang = $chu/$num[$i];
            if($shang === 1) return true;
            $chu = $shang;
        }
    }
    return false;
}

/**
 * @param $num
 * @return string
 * 获取第n个丑数
 */
function UglyNumber($num)
{
    $index = 1;
    $arr = [];
    while($num){
        if(GetUglyNumber_Solution($index)){
            $arr[0] = $index;
            $num--;
        };
        $index++;
    }
    return implode(',',$arr);
}

echo UglyNumber(20);
//var_dump(GetUglyNumber_Solution(20));
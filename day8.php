<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2019/2/21
 * Time: 8:39
 */

echo LastRemaining_Solution(10,3);

/**
 * @param $n
 * @param $m
 * @return mixed
 */
function LastRemaining_Solution($n, $m)
{
    //将n个小朋友用数组表示
    $letter = range(1,$n);

    //a表示报数
    $a = 0;
    //循环开始报数
    while(count($letter) > 1){
        for ($i = 0; $i < $n; $i++){
            if(count($letter) == 1) break;
            if(!isset($letter[$i])) continue;

            $a++;
            if($a == $m){       //当喊道m时删除小朋友
                unset($letter[$i]);
                $a = 0;     //重新重0开始报数
            }
        }
    }
    return array_pop($letter);
}
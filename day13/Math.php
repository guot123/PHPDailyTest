<?php
class Math{
    public static function Add($num1,$num2)
    {
        $arr = array($num1,$num2);
        $sum = array_sum($arr);
        return $sum;
    }
}

?>
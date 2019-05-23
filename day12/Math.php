<?php
class Math{
    public static function Sum_Solution($n){
        $sum = $n?$n+($n--):$n--;
        return $sum;
    }
}


?>
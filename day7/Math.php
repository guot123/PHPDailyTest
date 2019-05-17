<?php
class Math{
    public static function GetUglyNumber_Solution($index){
        if ($index%2 == 1) {
            echo "是丑数";
        }else {
            echo "不是丑数";
        }
        return $index;
    }
}

?>
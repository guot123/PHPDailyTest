<?php
class Math{
    public static function Combine($arr_A,$arr_B)
    {
        $arr[] = '';
        $arr = array_merge($arr_A,$arr_B);
        array_multisort($arr);
        return $arr;
    }
}

?>
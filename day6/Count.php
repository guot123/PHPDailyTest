<?php
class Count{
    public static function calFn($n,$m){
        $shu = '';
        for ($i=$n; $i <= $m; $i++) { 
            $shu .= $i; 
        }
        $shu = substr_count($shu,'1');
        return $shu;
        
    }
}

?>
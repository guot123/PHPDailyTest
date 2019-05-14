<?php
class Math{
    public static function calSteps($n){
        $shu=0;
        for ($i=0; $i <= $n; $i+2) { 
            if ($i=$n) {
                $shu+1;
                break;
            }else{
                for ($i=0; $i <= $n; $i++) { 
                    if ($i<=$n) {
                        $shu+1;
                        break;
                    }
                }
            }
        }
        return $shu;
    }
}
?>
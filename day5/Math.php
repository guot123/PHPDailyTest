<?php

function js($arr){
    $js=[];
    foreach ($arr as $key => $value) {
        if ($value%2 == 1) {
            $js[] = $value;
        }
        
    }
    return $js;
}
function os($arr){
    $os=[];
    foreach ($arr as $key => $value) {
       if ($value%2 == 0) {
           $os[] = $value;
       }
       
    }
    return $os;
}
$arr = array(1,2,3,4,5,6,7,8,9,10);
$js= js($arr);
$os= os($arr);
$array = array_merge($js,$os);
var_dump($array);
?>
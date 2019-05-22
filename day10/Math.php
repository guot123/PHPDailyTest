<?php
function odd($arr){
    $newArr = [];
    $result = array_count_values($arr);
    foreach ($result as $key => $value) {
        if ($value == 1) {
            $newArr[] = $key;
        }
    }
    return $newArr;
}
$arr = [2,4,3,6,3,2,5,5];
$new = odd($arr);
print_r($new);

?>
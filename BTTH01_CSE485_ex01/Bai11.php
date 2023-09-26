<?php
    $array = array(1, 2, 3, 4, 5);
    unset($array[3]);
    $arr = array_values($array);
    var_dump($arr);
?>
<?php
    $array1 = [
        [77, 87],
        [23, 45]
    ];

    $array2 = [
        'giá trị 1', 'giá trị 2'
    ];

    $Gop = array_merge($array1, $array2);
    var_dump($Gop);
?>
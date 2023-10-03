<?php
    $array = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100, -125, 0];

    echo "Tất cả các số từ 100 đến 200 và chia hết cho 5 là: ";
    foreach($array as $i){
        if($i>99 && $i<201 && $i%5==0){
            echo $i. " ";
        }
    }
?>
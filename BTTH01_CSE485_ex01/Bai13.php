<?php
    $numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72,
    65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

    $Tong = array_sum($numbers);
    $TrungBinh = $Tong / count($numbers);
    echo "Giá trị trung bình là: " . $TrungBinh . '<br>';

    //$uniqueNumbers = array_unique($numbers);
    echo "Các số có giá trị lớn hơn giá trị trung bình là: ";
    for($i=0; $i<count($numbers); $i++){
        if($numbers[$i] > $TrungBinh){
            echo $numbers[$i] . " ";
        }
    }
    echo '<br>';

    echo "Các số có giá trị nhỏ hơn giá trị trung bình là: ";
    for($i=0; $i<count($numbers); $i++){
        if($numbers[$i] <= $TrungBinh){
            echo $numbers[$i] . " ";
        }
    }
?>
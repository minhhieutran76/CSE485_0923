<?php
    $numbers = [
        'key1' => 12,
        'key2' => 30,
        'key3' => 4,
        'key4' => -123,
        'key5' => 1234,
        'key6' => -12565,
    ];

    // -- Ý 1
    echo "Phần tử đầu tiên là: ". $numbers['key1'] .", phần tử cuối cùng là: " . $numbers['key6']. '<br>';
    
    // -- Ý 2
    $Solon = max($numbers);
    $Sonho = min($numbers);
    $Tong = array_sum($numbers);
    echo "Số lớn nhất: " . $Solon . ", số nhỏ nhất: " . $Sonho . '<br>';
    echo "Tổng các giá trị: " . $Tong . '<br>';

    // -- Ý 3
    sort($numbers);
    var_dump($numbers);
    echo '<br>';

    rsort($numbers);
    var_dump($numbers);
    echo '<br>';

    // -- Ý 4
    ksort($numbers);
    var_dump($numbers);
    echo '<br>';

    krsort($numbers);
    var_dump($numbers);
    echo '<br>';

?>
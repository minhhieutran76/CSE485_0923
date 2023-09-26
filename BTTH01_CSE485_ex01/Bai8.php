<?php
    $array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];
    $chuoilon = $array[0];
    $chuoinho = $array[0];

    foreach ($array as $str) {
        if (strlen($str) > strlen($chuoilon)) {
            $chuoilon = $str;
        }

        if (strlen($str) < strlen($chuoinho)) {
            $chuoinho = $str;
        }
    }
    echo "Chuỗi lớn nhất là " . $chuoilon . ", độ dài = ". strlen($chuoilon) .'<br>';
    echo "Chuỗi nhỏ nhất là " . $chuoinho . ", độ dài = ". strlen($chuoinho);
?>
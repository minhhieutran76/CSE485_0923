<?php
    $arrs = [2, 5, 6, 9, 2, 5, 6, 12 ,5];

    $tong =  $arrs[0];
    $hieu = $arrs[0];
    $tich = $arrs[0];
    $thuong = $arrs[0];


    for($i =1;$i<=8;$i++)
    {
        $tong+=$arrs[$i];
        $hieu-=$arrs[$i];
        $tich*=$arrs[$i];
        $thuong/=$arrs[$i];
    }
   


   echo 'Tổng các phần tử      ='.implode(' + ', $arrs).' = '.$tong.'<br>';
   echo 'Tích các phần tử      ='.implode(' - ', $arrs).' = '.$hieu.'<br>';
   echo 'Hiệu các phần tử      ='.implode(' * ', $arrs).' = '.$tich.'<br>';
   echo 'Thương các phần tử    ='.implode(' / ', $arrs).' = '.$thuong.'<br>';
   
    
?>
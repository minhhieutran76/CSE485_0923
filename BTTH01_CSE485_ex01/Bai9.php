<?php
    $arrs = ['1', 'B', 'C', 'E'];
    for($i=0;$i<count($arrs);$i++)
    {
        $arrs[$i] = strtolower($arrs[$i]);
    }
    
    var_dump($arrs)
?>
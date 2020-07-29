<?php

function cari_mean($arr){
    $jml    = 0;
    $jml_n  = count($arr);
    for ($i=0; $i < $jml_n; $i++) { 
        $jml += $arr[$i];
    }
    $mean = $jml/$jml_n;
    echo round($mean);
    echo '<br>';
}

// TEST CASE 
echo cari_mean([1, 2, 3, 4, 5]); // 3
echo cari_mean([3, 5, 7, 5, 3]); // 5
echo cari_mean([6, 5, 4, 7, 3]); // 5
echo cari_mean([1, 3, 3]); // 2
echo cari_mean([7, 7, 7, 7, 7]); // 7

?>
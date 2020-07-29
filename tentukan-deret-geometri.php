<?php
function tentukan_deret_geometri($arr) {
    $jmlarr   = count($arr);
    $selisih  = 0;
    $jmlfalse = 0;
    for ($i=0; $i < $jmlarr; $i++) { 
        if ($i==0) {
            $selisih = $arr[$i+1]/$arr[$i];
        }
        if ($i<$jmlarr-1) {
            if ($selisih!=$arr[$i+1]/$arr[$i]) {
                $jmlfalse +=1;
            }
        }
    }
    if ($jmlfalse>0) {
        echo 'false<br>';
    }else{
        echo 'true<br>';
    }
}
//TEST CASES
echo tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
echo tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
echo tentukan_deret_geometri([2, 4, 6, 8]); // false
echo tentukan_deret_geometri([2, 6, 18, 54]); // true
echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false
?>
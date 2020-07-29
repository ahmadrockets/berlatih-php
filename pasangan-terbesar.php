<?php
    function pasangan_terbesar($angka){
        $arrsplit = str_split($angka);
        for ($i=0; $i < count($arrsplit)-1; $i++) { 
            if ($i==0) {
                $angkapasangan = $arrsplit[$i].$arrsplit[$i+1];
            }
            if ((int)$angkapasangan<(int)($arrsplit[$i].$arrsplit[$i+1])) {
                $angkapasangan = $arrsplit[$i].$arrsplit[$i+1];
            }
        }
        echo $angkapasangan;
        echo '<br>';
    }

    // TEST CASES
    echo pasangan_terbesar(641573); // 73
    echo pasangan_terbesar(12783456); // 83
    echo pasangan_terbesar(910233); // 91
    echo pasangan_terbesar(71856421); // 85
    echo pasangan_terbesar(79918293); // 99
?>
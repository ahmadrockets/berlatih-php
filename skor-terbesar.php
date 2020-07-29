<?php
function skor_terbesar($arr){
    //menentukan kelas
    $namakelas     = '';
    $kelas         = array();
    $skorterbanyak = array();
    for ($i=0; $i < count($arr); $i++) { 
        if ($i==0) {
            $namakelas = $arr[$i]['kelas'];
            $kelas[]   = $arr[$i]['kelas'];
        }
        if (!in_array($arr[$i]['kelas'], $kelas)) {
            $namakelas = $arr[$i]['kelas'];
            $kelas[]   = $arr[$i]['kelas'];
        }
    }
    //menghitung nilai terbanyak per kelas
    $arrnilaiterbanyak = array();
    for ($j=0; $j < count($kelas); $j++) { 
        for ($k=0; $k < count($arr); $k++) { 
            if($kelas[$j]==$arr[$k]['kelas']){
                $nilaitertinggi = 0;
                if ($nilaitertinggi<$arr[$k]['nilai']) {
                    $nilaitertinggi = $arr[$k]['nilai'];
                    $arrtertinggi   = $arr[$k];
                }
            }
        }
        $arrnilaiterbanyak[] = $arrtertinggi;
    }

    return $arrnilaiterbanyak;
}

// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];
echo '<pre>';
print_r(skor_terbesar($skor));
echo '</pre>';
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>
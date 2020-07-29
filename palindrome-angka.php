<?php

function palindrome_angka($angka) {
    $ret = '';
    //jika angka 0 > 9 maka dianggap palindrome
    if ($angka>=0 && $angka <10) {
        $ret = $angka+1;
    }else{
        while (isPalindrome($angka) == 0) {
            $angka = $angka+1;
        }
        $ret = $angka;
    }

    return  $ret.'<br>';
}
//fungsi untuk mengecek bilangan palindrome
function isPalindrome($angka){
    $temp = $angka;   
    $new = 0;   
    while (floor($temp)) {   
        $d    = $temp % 10;
        $new  = $new * 10 + $d;
        $temp = $temp/10;
    }   
    if ($new == $angka){
        return 1;
    }else{
        return 0;
    } 
}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>
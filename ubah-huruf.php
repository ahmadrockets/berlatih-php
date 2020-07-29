<?php
function ubah_huruf($string){
    $jmlkarakter = strlen($string);
    for ($i=0; $i < $jmlkarakter; $i++) { 
        $karakter = $string[$i];
        echo ++$karakter;
    }
    echo '<br>';
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>
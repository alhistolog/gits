<?php
    $uang = 50;
    $mainan = array(1,12,5,111,200,1000,10);
    $jumlah = 0;
    $output = 0;
    $pilihan = array();

    foreach ($mainan as $pilih){
        $jumlah = $jumlah + $pilih;
        if ($jumlah <= $uang){
            array_push($pilihan, $pilih);
            $output++;
        } else {
            $jumlah = $jumlah - $pilih;
        }
    }
    echo nl2br("Input : uang = ".$uang." dan mainan = ");
    for($i=0;$i<count($mainan);$i++){
        echo $mainan[$i]." ";
    }
    echo nl2br("\n Output : ". $output);
    echo nl2br("\n Explaination : Sony membeli ". $output ." mainan dengan pilihan mainan ");
    for($i=0;$i<count($pilihan);$i++){
        echo $pilihan[$i]." ";
    }
?>
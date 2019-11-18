<?php
    $output = 0;
    $array = array(10,20,20,10,10,30,50,10,20);
    $countArray = array_count_values($array);
    
    echo nl2br("Input \n array = ");
    for($i=0;$i<count($array);$i++){
        echo $array[$i]." ";
    }

    foreach($countArray as $item){
        $output = $output + floor($item/2);
    }
    echo nl2br("\n Output \n ".$output ." Pasang Kaos Kaki");
?>
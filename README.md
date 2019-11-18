# GITS Test
No 1

```
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
```

Result No.1
![alt text](https://github.com/alhistolog/gits/blob/master/1.PNG)

No 2
```
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
```

Result No.2
![alt text](https://github.com/alhistolog/gits/blob/master/2.PNG)

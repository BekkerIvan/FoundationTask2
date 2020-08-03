<?php

    function addAll($list){
        $sum = 0;
        while(count($list) > 0){
            for ($i=0; $i < count($list) ; $i++) { 
                $sum +=$list[$i];
            }
            array_shift($list);
        }
        return $sum;
    }
    
    function addAll_Rcursive($list){
        if (count($list) == 0) {
            return 0;
        }else{
            $sum = 0;
            for ($i=0; $i < count($list) ; $i++) { 
                $sum += $list[$i];
            }
            array_shift($list);
            return $sum + addAll_Rcursive($list);
        }
    }

    $list = array(1,1,1,1,1);
    echo addAll($list);
    echo "<br>";
    echo addAll_Rcursive($list);
?>
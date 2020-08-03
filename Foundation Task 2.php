<?php
    function Fibonacci($stop){
        $i = 0; $j = 1; $k = 0;
        while($k < $stop){
            $k = $i + $j;
            echo $k; echo "  ";
            $i = $j; $j=$k;
        }
    }

    function Fibonacci_Recursive($i,$j,$stop){
        $k = $i + $j;
        if($k > $stop)
            return $k;
        else{
            echo $k; echo "  ";
            return Fibonacci_Recursive($j,$k,$stop);
        }
    }

    Fibonacci(34);
    echo "<br>";
    Fibonacci_Recursive(0,1,55);

?>
<?php
    
        $n=10;
        $a=0;
        $b=1;
        echo "The first $n terms in fibonacci series are : <br>";
        echo "$a\t$b\t";
        for($i=1;$i<=$n-2;$i++)
        {
            $sum=$a+$b;
            echo "$sum\t";
            $a=$b;
            $b=$sum;
        }
    ?>
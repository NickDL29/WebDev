<?php
    
        $sum=0;
        $flag=0;
        echo "The prime numbers which are less than 100 are : ";
        for($i=2;$i<100;$i++)
        {
            $flag=0;
            for($j=2;$j<$i;$j++)
            {
                if($i%$j==0)
                {
                    $flag=1;
                    break;
                }
            }
            if($flag==0)
            {
                echo $i."\t";
                $sum=$sum+$i;
            }
        }
        echo "<br> The sum of all prime numbers less than 100 is :".$sum;
    ?>
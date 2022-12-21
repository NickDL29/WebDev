<?php
    //Student grade evaluation
        $marks=75;
        if($marks>90 and $marks<=100)
        {
            echo "Student scored AA grade. <br>";
        }
        elseif($marks>80 and $marks<=90)
        {
            echo "Student scored AB grade. <br>";
        }
        elseif($marks>70 and $marks<=80)
        {
            echo "Student scored BB grade. <br>";
        }
        elseif($marks>60 and $marks<=70)
        {
            echo "Student scored BC grade.<br>";
        }
        elseif($marks>50 and $marks<=60)
        {
            echo "Student scored CC grade. <br>";
        }
        elseif($marks>35 and $marks<=50)
        {
            echo "Student scored DD grade. <br>";
        }
        else
        {
            echo "Student scored FF grade. <br>";
            echo "Student got failed. <br>";
        }
    ?>
<?php
        //Matrix - Transpose, Multiplication, Addition
        $arr1=array(array(9,10,11),array(12,13,14),array(16,17,18));
        echo "Matrix is : <br>";
        for($i=0;$i<3;$i++)
        {
            for($j=0;$j<3;$j++)
            {
                echo $arr1[$i][$j]."\t";
            }
            echo "<br>";
        }
        echo "<br>";
        echo "Transpose of matrix is : <br>";
        for($i=0;$i<3;$i++)
        {
            for($j=0;$j<3;$j++)
            {
                echo $arr1[$j][$i]."\t";
            }
            echo "<br>";
        }
        echo "<br>";
        $arr2=array(array(1,5,4),array(7,2,3),array(1,2,3));
        echo "Matrix are : <br>";
        echo "Matrix 1 : <br>";
        for($i=0;$i<3;$i++)
        {
            for($j=0;$j<3;$j++)
            {
                echo $arr1[$i][$j]."\t";
            }
            echo "<br>";
        }
        echo "<br>";
        echo "Matrix 2 : <br>";
        for($i=0;$i<3;$i++)
        {
            for($j=0;$j<3;$j++)
            {
                echo $arr2[$i][$j]."\t";
            }
            echo "<br>";
        }
        echo "<br>";
        $arr3=array(array(0,0,0),array(0,0,0),array(0,0,0));
        echo "Multiplication of Matrix 1 and Matrix 2 : <br>";
        for($i=0;$i<3;$i++)
        {
            for($j=0;$j<3;$j++)
            {
                for($k=0;$k<3;$k++)
                {
                    $arr3[$i][$j]+=$arr1[$i][$k]*$arr2[$k][$j];
                }
            }
        }
        for($i=0;$i<3;$i++)
        {
            for($j=0;$j<3;$j++)
            {
                echo $arr3[$i][$j]."\t";
            }
            echo "<br>";
        }
        echo "<br>";
        echo "Addition of Matrix 1 and Matrix 2 : <br>";
        for($i=0;$i<3;$i++)
        {
            for($j=0;$j<3;$j++)
            {
                echo $arr1[$i][$j]+$arr2[$i][$j]."\t";
            }
            echo "<br>";
        }
    ?>
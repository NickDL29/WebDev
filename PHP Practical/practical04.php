    
       <?php
        //Swap variable
        $a=20;
        $b=30;
        echo "Before swapping... <br>";
        echo "The value of a is : $a. <br> The value of b is : $b. <br>";
        $a=$a-$b;
        $b=$a+$b;
        $a=$b-$a;
        echo "After swapping... <br>";
        echo "The value of a is : $a. <br> The value of b is : $b. <br>";
    ?>
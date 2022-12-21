<h4>Practical-8</h4>
    <?php
      
        echo "1. Addition <br> 2. Subtraction <br> 3. Multiplication <br> 4. Division <br> 5. Modulo <br>";
        $ch=2;
        $a=30;
        $b=10;
        echo "The value of a is : $a. <br> The value of b is : $b. <br>";
            switch($ch)
            {
                case 1:
                    echo "The sum of a and b is : ".($a+$b)."<br>";
                    break;
                case 2:
                    echo "The difference of a and b is : ".($a-$b)."<br>";
                    break;
                case 3:
                    echo "The product of a and b is : ".($a*$b)."<br>";
                    break;
                case 4:
                    echo "The quotient of a and b is : ".($a/$b)."<br>";
                    break;
                case 5:
                    echo "The modulo of a and b is : ".($a%$b)."<br>";
                    break;
                default:
                    echo "Enter correct choice...(Between 1 and 5) <br>";
            }
    ?>
    
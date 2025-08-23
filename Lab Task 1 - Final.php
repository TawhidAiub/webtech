<!DOCTYPE HTML>
<html>
    <body>

        <h1>Task 1</h1>

        <?php
        $length = 20;
        $width = 10;

        $area = $length * $width;
        $perimeter = 2 * ($length + $width);

        echo "The Area of Rectangle = $area <br>";
        echo "Perimeter of Rectangle = $perimeter";
        ?>

        <h1>Task 2</h1>

        <?php
        $amount = 5000;
        $vat = 0.15 * $amount;

        echo "Amount = $amount <br>";
        echo "VAT (15%) = $vat <br>";
        echo "Total = " . ($amount + $vat);
        ?>

        <h1>Task 3</h1>

        <?php
        $num = 14;

        if ($num % 2 == 0) {
        echo "$num is Even";
        } 
        else {
        echo "$num is Odd";
        }
        ?>

        <h1>Task 4</h1>

        <?php
        $x = 15;
        $y = 35;
        $z = 25;

        if ($x >= $y && $x >= $z) {
        echo "$x is the largest";
        } elseif ($y >= $x && $y >= $z) {
        echo "$y is the largest";
        } else {
        echo "$z is the largest";
        }
        ?>

        <h1>Task 5</h1>

        <?php
        echo "Odd numbers are: ";
        for ($i = 10; $i <= 100; $i++) 
            {
                if ($i % 2 != 0) 
                    {
                        echo  $i . " ";
                    }
            }
        ?>

        <h1>Task 6</h1>

        <?php
        $arr = array(1, 3, 5, 7, 9);
        $search = 7;
        $found = false;

        foreach ($arr as $value) 
            {
                if ($value == $search)
                     {
                        $found = true;
                        break;
                    }
                }

        if ($found) 
            {
                echo "$search found in array";
            } else {
                echo "$search not found in array";
             }
        ?>

        <h1>Task 7</h1>

        <?php
        for ($i=1; $i<=3; $i++) {
            for ($j=1; $j<=$i; $j++) {
                echo "* ";
            }
            echo "<br>";
        }
        ?><br>

        <?php
        for ($i=3; $i>=1; $i--) {
            for ($j=1; $j<=$i; $j++) {
                echo $j . " ";
            }
            echo "<br>";
        }
        ?><br>

        <?php
        $letters = ["A","B","C","D","E","F"];
        $index = 0;
        for ($i=1; $i<=3; $i++) {
            for ($j=1; $j<=$i; $j++) {
                echo $letters[$index++] . " ";
            }
            echo "<br>";
        }
        ?>

        <h1>Task 8</h1>

        <?php

        $arr = [
            [1, 2, 3, 'A'],
            [1, 2, 'B', 'C'],
            [1, 'D', 'E', 'F']
        ];

        // shape 1

        for ($i=0; $i<count($arr); $i++)
        {
            for ($j=0; $j<count($arr[$i]); $j++)
            {
                echo $arr[$i][$j] . " ";
            }
            echo "<br>";
        }

        echo "<br>";

        // shape 2

        for ($i=3; $i>=1; $i--) {
            for ($j=1; $j<=$i; $j++){
                echo $j . " ";
            }
            echo "<br>";
        }

        $char = 'A';
        for ($i=1; $i<=3; $i++){
            for($j=1; $j<$i; $j++){
                echo $char . " ";
                $char++;
            }
            echo "<br>";
        }

        
        ?>
        
    </body>
</html>
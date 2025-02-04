<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Operator</title>
</head>
<body>
    <center>
        <?php
            $a = 10;
            $b = 20;
            //addition operator
            $c = $a + $b;
            echo "The Sum Of ".$a ." and " .$b ." is " . $c; 
            echo "<br>";
            //sub operator
            $d = $b - $a;
            echo "The Diff Of ".$b ." and " .$a ." is " . $d; 
            echo "<br>";
            //Multiplication operator
            $e = $a * $b;
            echo "The Mul Of ".$a ." and " .$b ." is " . $e; 
            echo "<br>";
            //division operator
            $g = $a / $b;
            echo "By Dividing ".$a . " By ".$b . " is ".$g;
            echo "<br>";
            //decrement operator
            $f = $a++;
            echo "The decrement of 1 in ".$a ." is ".$f;
            echo "<br>";
            //Increment operator
            $h = $b--;
            echo "The increment of 1 in ".$b ." is ".$h;
            
            echo "<br>";
//Comparison operator
            $i = $a < $b;
            echo $i;
            echo "<br>";
            $j = $c !== $e;
            echo $j;
            echo "<br>";
            echo $j == $h;
            echo "<br>";
            echo $j === $h;
            echo "<br>";
            echo $b > $g;
            echo "<br>";
            echo $d >= $i;

        ?>
    </center>
    
</body>
</html>
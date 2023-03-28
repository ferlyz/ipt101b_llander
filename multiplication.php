<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h1> </h1>
    <?php
        // change the value of $num to generate multiplication table for different numbers
        $num = 5;
        
        echo "Multiplication table for $num: <br>";
        
        // loop through 1 to 10 to generate the multiplication table
        for ($i = 1; $i <= 10; $i++) {
            echo "$num x $i = " . ($num * $i) . "<br>";
        }
    ?>
</body>
</html>
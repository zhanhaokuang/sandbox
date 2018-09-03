<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
        $var1 = 3;
        $var2 = 4;
    ?>
    Basic Math: <?php echo ((1 + 2 + $var1) * $var2) / 2 - 5; ?><br/>
    <br>
    Absolute Value: <?php echo abs(  0 - 300); ?><br>
    Exponential: <?php echo pow(2, 8); ?><br>
    Square Root: <?php echo sqrt(100); ?><br>
    Modulo: <?php echo fmod(20, 7 ); ?><br>
    Random: <?php echo rand(); ?><br>
    Random(min, max): <?php echo rand(1, 10); ?><br>
    <br>
    <!--       += -->
    <!--       += -->
    <!--       += -->
    <!--       += -->
    Increment:
    <?php
        $var2++;
        echo $var2;
     ?>
    Decrement:
    <?php
        $var2--;
        echo $var2;
    ?>
    <?php echo 1 + "2"; ?>

</body>
</html>
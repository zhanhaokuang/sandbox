<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
        $numbers = array(4,8,15,16,23,42);
        echo $numbers[0];

        $mixed = array(6, "fox", "dog", array("x", "y", "z"));
        echo $mixed[2];
        echo $mixed[3][1];
        $array = [1,2,3];
    ?>
    <br>
    <?php
        $assoc = array("first_name" => "zhanhao", "last_name" => "kuang");
        echo $assoc ["first_name"] . " " . $assoc[last_name];

        print_r($numbers);
    ?>
    <br>
    <?php
        $some_numbers = array(8,23,25,27,30,100);
    ?>
    Count: <?php echo count($some_numbers) ?><br>
    Max value: <?php echo max($some_numbers) ?><br>
    Min value: <?php echo min($some_numbers) ?><br>
    <br>
    Sort:
    <?php
        sort($some_numbers);
        print_r($some_numbers);
     ?><br>

    Reverse Sort:
    <?php
    rsort($some_numbers);
    print_r($some_numbers);
    ?>
    <br>
    Implode: <?php echo $num_string = implode("*", $some_numbers); ?>
</body>
</html>
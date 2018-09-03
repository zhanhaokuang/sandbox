<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
        $result1 = true;
        $result2 = false;
    ?>
    <?php echo is_bool($result2); ?>
    <?php
        $var1 = null;
        $var2 = "";
        echo is_null($var1);
    ?>
    <br>
    Type Juggling:
    <?php $count = "2 cats"; ?>
    Type: <?php echo gettype($count); ?>
    <br>
    <?php $count += 3; ?>
    Type: <?php echo gettype($count); ?>
    <br>
    Type Casting:<br>
    <?php settype($count, "string"); ?>
    count: <?php echo gettype($count); ?>

</body>
</html>
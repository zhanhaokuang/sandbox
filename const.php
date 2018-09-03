<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
        $max_width = 980; //Normal variable creation

        define("MAX_WIDTH", 980); //Const
        echo MAX_WIDTH;

        define("MAX_WIDTH", 981); //Const
        echo MAX_WIDTH;
    ?>
</body>
</html>
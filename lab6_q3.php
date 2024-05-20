<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 6 Q3</title>
</head>
<body>
    <?php
    function kiraArea($width, $height) {
        return $width * $height;
    }
        $width = 4; 
        $height = 2; 
        $area = kiraArea($width, $height);

    // Display the result
    echo "<p>The area of a rectangle with a width of $width and height $height is $area</p>";
    ?>
</body>
</html>

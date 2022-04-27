<!-- Write a PHP program to check find Largest between 3 given numbers.  -->
<!DOCTYPE html>
<html>

<head>
    <title>js</title>
</head>

<body>
    <?php
    function maxNum($x, $y, $z) {
        $max = 0;
        if ($x > $y) {
            $max = $x;
        } else {
            $max = $y;
        }
        if ($z > $max) {
            $max = $z;
        }
        return $max;
    }
    echo max(1, 99, 45);
    ?>
</body>

</html>
<!-- Create a script to construct the following pattern, using nested for loop    -->
<!DOCTYPE html>
<html>

<head>
    <title>php</title>
</head>

<body>
    <?php
    $n = 5;
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }

    ?>
</body>

</html>
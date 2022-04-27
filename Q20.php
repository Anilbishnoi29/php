<!-- Write a PHP program to check whether a given number is even or odd  -->
<!DOCTYPE html>
<html>

<head>
    <title>php</title>
</head>

<body>
    <?php
    function typeCheck($x) {
        if (($x % 2) == 0) {
            echo "<h3> Even </h3>";
        } else {
            echo "<h3> Odd </h3>";
        }
    }
    echo typeCheck(9);
    echo typeCheck(8);
    ?>
</body>

</html>
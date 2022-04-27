<!-- Write a PHP function to reverse a string. -->
<!DOCTYPE html>
<html>

<head>
    <title>php</title>
</head>

<body>
    <?php
    $string = "HELLO";
    $length = strlen($string);
    for ($i = ($length - 1); $i >= 0; $i--) {
        echo $string[$i];
    }
    ?>

</body>

</html>
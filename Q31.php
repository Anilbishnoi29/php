<!-- Write a PHP program to create cookies?  -->
<!DOCTYPE html>
<html>

<head>
    <title>php</title>
</head>

<body>
    <?php
    $cookie_name = "Name";
    $cookie_value = "Rohit Singh";
    setcookie($cookie_name, $cookie_value, time() + (86400), "/"); // 86400s = 1 day
    ?>
    <html>

    <body>

        <?php
        if (!isset($_COOKIE[$cookie_name])) {
            echo "Cookie named '" . $cookie_name . "' is not set!";
        } else {
            echo "Cookie '" . $cookie_name . "' is set!<br>";
            echo "Value is: " . $_COOKIE[$cookie_name];
        }
        ?>

    </body>

    </html>
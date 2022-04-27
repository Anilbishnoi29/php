<!-- Write a PHP program to perform basic file operations? $x=getenv(“ipaddress”)  -->
<!DOCTYPE html>

<head>
    <title>php</title>
</head>

<body>
    <?php
    $cookie_name = "Name";
    $cookie_value = "Rohit Singh";
    setcookie($cookie_name, $cookie_value, time() + (86400), "/"); // 86400s = 1 day

    $ipaddress = getenv("REMOTE_ADDR");
    echo "Your IP Address is " . $ipaddress;
    ?>

</body>

</html>
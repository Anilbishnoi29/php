<!DOCTYPE html>

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
        $myfile = fopen("demo.txt", "w") or die("Unable to open file!");
        $txt = "Hello world\n";
        fwrite($myfile, $txt);
        fclose($myfile);
        ?>

    </body>

    </html>
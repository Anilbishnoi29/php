<!-- Write a program in PHP to display the number in reverse order -->
<!DOCTYPE html>

<head>
    <title>php</title>
</head>

<body>
    <?php
    $tempNume = 1234;
    $num = $tempNume;
    $revnum = 0;
    while ($num > 1) {
        $rem = $num % 10;
        $revnum = ($revnum * 10) + $rem;
        $num = ($num / 10);
    }
    echo "Reverse number of $tempNume is: $revnum";
    ?>
</body>

</html>
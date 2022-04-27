<!-- Write a PHP program to find whether a given year is a leap year or not.  -->
<!DOCTYPE html>
<html>

<head>
    <title>php</title>
</head>

<body>
    <?php
    function year_check($my_year) {
        if ($my_year % 400 == 0)
            print("It is a leap year");
        else if ($my_year % 100 == 0)
            print("It is not a leap year");
        else if ($my_year % 4 == 0)
            print("It is a leap year");
        else
            print("It is not a leap year");
    }
    year_check(2022);
    ?>
</body>

</html>
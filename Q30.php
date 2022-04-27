<!-- Write a PHP function that checks whether a passed string is a palindrome or not?  -->
<!DOCTYPE html>
<html>

<head>
    <title>php</title>
</head>

<body>
    <?php
    function Palindrome($string) {
        if (strrev($string) == $string) {
            return 1;
        } else {
            return 0;
        }
    }

    $original = "DAD";
    if (Palindrome($original)) {
        echo "Palindrome";
    } else {
        echo "Not a Palindrome";
    }
    ?>

</body>

</html>
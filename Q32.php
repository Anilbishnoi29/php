<!-- Write a PHP program to send data from one form to another using GET, POST and REQUEST methods. -->
<!-- Write a PHP program to create cookies?  -->
<!DOCTYPE html>

<head>
    <title>php</title>
</head>

<body>
    <form action="" method="POST">
        Name:<input type="text" name="firstname"> <br>
        Show:<input type="submit" value="Submit">

    </form>
    <?php
    $fname = $_POST['firstname'];
    echo $fname;
    ?>
</body>

</html>
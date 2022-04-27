<!-- Create a simple HTML form and accept the user name and display the name through PHP echo statement.  -->
<!DOCTYPE html>
<html>

<head>
    <title>js</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="uname" id="name">
        <input type="submit" value="show">
    </form>
    <?php
    $uname = $_POST['uname'];
    echo "<h3> $uname </h3>";
    ?>
</body>

</html>
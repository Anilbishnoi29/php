<!-- Write a PHP script to sort the following associative array : array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") in 
a) ascending order sort by value
b) ascending order sort by Key -->
<!DOCTYPE html>
<html>

<head>
    <title>php</title>
</head>

<body>
    <?php
    $arr = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");
    $arr1 = $arr;
    $arr2 = $arr;
    asort($arr1);
    foreach ($arr1 as $y => $y_value) {
        echo "Age of " . $y . " is : " . $y_value . ",   ";
    }
    echo "<br>";
    ksort($arr2);
    foreach ($arr2 as $y => $y_value) {
        echo "Age of " . $y . " is : " . $y_value . ",   ";
    }
    ?>
</body>

</html>
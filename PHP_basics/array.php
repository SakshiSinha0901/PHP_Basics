<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "array.php" method = "post">
        <label>Enter a country:</label><br>
        <input type = "text" name = "country"><br>
        <input type = "submit">
    </form>
</body>
</html>
<?php
    $capitals = array("USA" => "Washington",
                    "Japan" => "Kyoto",
                    "India" => "New Delhi",
                    "South Korea" => "Seoul");

    $capitals = $capitals[$_POST["country"]];
    echo "The capital is {$capitals}.";

?>
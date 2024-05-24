<?php

include("config.php");

$result = mysqli_query($mysqli, "SELECT * from facilities");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports</title>
    <link rel="stylesheet" href="style/Sports.css">
</head>

<body>
<div class="container">
    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo "<div class='box'>";
        echo "<div class='image-area' style='background-image: url(\"/" . $row['image_path'] . "\")'>";
        echo "</div>";
        echo "<div class='content'>";
        echo "<h2>" . $row['name'] . "</h2>";
        echo "<p>" . $row['description'] . "</p>";
        echo "</div>";
        echo "<div class='buttons'>";
        echo "<button class='btn'>Directions</button>";
        echo "<button class='btn'>Details</button>";
        echo "</div>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>


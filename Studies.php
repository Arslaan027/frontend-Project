<?php

include("config.php");

$sno = $_GET['sno'];

$result = mysqli_query($mysqli, "SELECT * FROM facilities");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports</title>
    <link rel="stylesheet" href="style/Studies.css">
</head>

<body>

x   
    <div class="container">
        <?php
        while ($row = mysqli_fetch_array($result)) {
            echo "<div class='box'>";
            echo "<div class='content'>";
            echo "<div class='image-area' style='background-image: url(\"/" . $row['image_path'] . "\")'></div>";
            echo "<h2>" . $row['name'] . "</h2>";
            echo "<p>" . $row['description'] . "</p>";
            echo "</div>";
            echo "<div class='buttons'>";
                // echo "<button class='btn'>Directions</button>";
                // echo "<button class='btn'>Details</button>";
            echo "</div>";
            echo "</div>";
        }
        ?>
    </div>
    
</body>
</html>

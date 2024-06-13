<?php
include("config.php");
$result = mysqli_query($mysqli, "SELECT * from front");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Life in AMU</title>
    <link rel="stylesheet" href="style/collabe.css">
</head>
<body>

    <header class="header">
        <h1>Student Life in Aligarh Muslim University</h1>
    </header>
    <div class="card-container"> 
    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo "<div class='card'>";
        echo "<img src='/" . $row['image'] . "' style='height: 165px;' class='card-image'>"; 
        echo "<h3><a href='main.php'>" . $row['heading'] . "</a></h3>";
        echo "<div class='card-description'>" . $row['description'] . "</div>";
        echo "</div>";
    }
    ?>
    </div> 
</body>
</html>

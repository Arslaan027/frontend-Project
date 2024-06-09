<?php
include("config.php");

$result = mysqli_query($mysqli, "SELECT * from facilities where sno=1");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports</title>
    <link rel="stylesheet" href="style/Sports.css">

</head>

<body onload="getLocation();">
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
        
        // echo "<form class='myForm' action='' method='post' autocomplete='off'>";
        // echo "<input type='hidden' name='latitude' value=''>";
        // echo "<input type='hidden' name='longitude' value=''>";
        echo "<div class='buttons'>";
        echo "  <a href='directions.html?long=".$row['longitude']."&lat=".$row['latitude']."'><button class='btn'>Directions</button></a> ";
        echo "</div>";
        // echo "</form>";
        echo "</div>";
    }
?>
</div>




</section>



</body>
</html>
 
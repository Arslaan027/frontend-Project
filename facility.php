<?php
include("config.php");

if (isset($_GET['sno'])) {
    $sno = $_GET['sno'];
    
    $stmt = $mysqli->prepare("SELECT * FROM facilities WHERE sno = ?");
    $stmt->bind_param("i", $sno);
    $stmt->execute();
    $result = $stmt->get_result();


    if ($result->num_rows > 0) {
        $facility = $result->fetch_assoc();
    } else {
        echo "Error: No facility found with the provided serial number.";
        exit;
    }
} else {
    echo "Error: Facility serial number (sno) not provided.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facility Details</title>
    <link rel="stylesheet" href="style/Sports.css">
</head>
<body>
    <div class="container">
        <div class="box">
            <div class='image-area' style='background-image: url("/<?php echo $facility['image_path']; ?>")'>
            </div>
            <div class='content'>
                <h2><?php echo $facility['name']; ?></h2>
                <p><?php echo $facility['description']; ?></p>
            </div>
            <div class='buttons'>
                <button class='btn'>Directions</button>
                <button class='btn'>Details</button>
            </div>
        </div>
    </div>
</body>
</html>

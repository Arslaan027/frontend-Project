<?php

include("config.php");

$result = mysqli_query($mysqli, "SELECT * from catagory");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Facilities</title>
    <link rel = "stylesheet" href="style/index.css">
</head>
<body>
    <section class="header">
        <nav>
            <a href="index.html"></a>
            <img src="/StudentFacility/eduford_img/logo2.png" alt="Image">
            <div class="navlinks">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="Support.php">Support</a></li>
<!-- Comentted for now 
<li><a href="">Sports</a></li>
<li><a href="">Study</a></li>
<li><a href="">Extra</a></li> -->
                </ul>
            </div>
        </nav>
    
    <div class="text-box">
        <h1>Students Facility</h1>
        <p>Step into a world of boundless opportunities where every corner of our campus is designed to nurture your growth and success. 
            From cutting-edge technology hubs to serene study spaces and vibrant recreational areas, we provide an environment that fosters learning, innovation, and well-being. Explore our array of 
            facilities tailored to elevate your college experience, and embark on a journey of discovery and excellence at AMU.</p>

        <a href="#footer" class="hero-btn">Visit to know more</a>  <!-- Hero Button -->
    </div>    
    </section>

<!-- Service Section -->

    <section class="service">
        <h1>Student Services</h1>
        <p>
            At Aligarh Muslim University, we pride ourselves on providing a comprehensive range of facilities tailored to every aspect of student life. From cutting-edge technology hubs to serene study spaces, vibrant recreational areas, and top-notch sports facilities, we're committed to ensuring that every student has the resources they need to thrive academically, socially, and personally. 
            Explore our campus and discover the countless opportunities awaiting you at AMU.
        </p>
        <div class="row">
            <?php
            
            foreach ($facilities as $facility) {
                echo "<div>";
                echo "<h2>" . $facility['name'] . "</h2>";
                echo "<p>" . $facility['description'] . "</p>";
                echo "<a href='sports.php?sno=" . $facility['sno'] . "'>View Details</a>";
                echo "</div>";
            }
            ?>    
        </div>
    </section>

    <footer id="footer">   
    </footer>
</body>
</html>
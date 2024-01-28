<?php
    require "session-start.php";
    require "../js/connect.php";

    $city = mysqli_query($con, "SELECT * FROM city");
    $totalCity = mysqli_num_rows($city);

    $lane = mysqli_query($con, "SELECT * FROM lane");
    $totallane = mysqli_num_rows($lane);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Management System | Home</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../css/style-adminpanel.css">
</head>

<body>
    

    <div class="home">
        <?php require "navbar.php"; ?>

        <div class="container mt-5">
            <h2>Welcome <?php echo $_SESSION['username']; ?></h2>

            
            <div class="box-container mt-5">
                
                <div class="box">
                    <div class="row">
                        <div class="col-6">
                            <i class="fas fa-globe-asia fa-7x text-black-50"></i>
                        </div>
                        <div class="col-6 text-white">
                            <h3 class="fs-2">Travel Place</h3>
                            <p class="fs-4"><?php echo $totalCity; ?> Cities</p>
                            <p><a href="city.php" class="text-white no-decoration">See Detail...</a></p>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="row">
                        <div class="col-6">
                            <i class="fas fa-subway fa-7x text-black-50"></i>
                        </div>
                        <div class="col-6 text-white">
                            <h3 class="fs-2">Train Lane</h3>
                            <p class="fs-4"><?php echo $totallane; ?> Lanes</p>
                            <p><a href="lane.php" class="text-white no-decoration">See Detail...</a></p>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="row">
                        <div class="col-6">
                            <i class="fas fa-ticket-alt fa-7x text-black-50"></i>
                        </div>
                        <div class="col-6 text-white">
                            <h3 class="fs-2">Train Service</h3>
                            <p class="fs-4"> Available</p>
                            <p><a href="service.php" class="text-white no-decoration">See Detail...</a></p>
                        </div>
                    </div>
                </div>

                
                

               

            </div>
            
        </div>

    </div>

    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../fontawesome/js/all.min.js"></script>
    
</body>
</html>
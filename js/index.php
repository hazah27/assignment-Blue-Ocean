<?php
    require "connect.php";

    $wpkl_group = mysqli_query($con, "SELECT * FROM city WHERE state='WP Kuala Lumpur'");
    $penang_group = mysqli_query($con, "SELECT * FROM city WHERE state='Penang'");
    $wpkl_group2 = mysqli_query($con, "SELECT * FROM city WHERE state='WP Kuala Lumpur'");
    $penang_group2 = mysqli_query($con, "SELECT * FROM city WHERE state='Penang'");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Booking Train Ticket | Home</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../css/style-js.css">
</head>
<body>
       
    <div class="search-railtime">
        <?php require "navbar.php"; ?>

        <div class="search-box text-light p-4 mt-5">
            <div class="home-tab">
                <h1>Rail Time</h1>
            </div>

            <form action="train-available.php" id="form" method="post">
                
                <div class="row formbackground p-4">

                    <div class="col-md-6 col-lg-3 col-sm-12 mt-10">
                        <label for="origin">Origin</label>
                        <select onchange="start()" id="originselector" class="form-control bg-light" name="origin">
                            <option disabled hidden selected value="">Select origin</option>                            
                            <optgroup label="WP Kuala Lumpur">                                
                                <?php
                                while($data=mysqli_fetch_array($wpkl_group))
                                {
                                    ?>
                                    <option value="<?php echo $data['id']; ?>"><?php echo $data['place']; ?></option>
                                    <?php 
                                }
                                    ?>
                            </optgroup>
                            <optgroup label="Penang">                                
                                <?php
                                while($data=mysqli_fetch_array($penang_group))
                                {
                                    ?>
                                    <option value="<?php echo $data['id']; ?>"><?php echo $data['place']; ?></option>
                                    <?php 
                                }
                                    ?>
                            </optgroup>                            
                        </select>
                    </div>

                    <!-- <div class="col-12 d-md-none d-xs-block border border-light d-flex justify-content-center align-items-end">
                        <div class="exchange text-center border border-black justify-content-center align-items-center d-flex shadow">
                            <i class="fa-lg fas fa-exchange-alt web-exchange" onclick="SwapFromToTerminal()">::before</i>
                        </div>
                    </div> -->

                    <div class="col-md-6 col-lg-3 col-sm-12 mt-10">
                        <label for="destination">Destination</label>
                        <select name="destination" onchange="destiny()" id="destinationselector" class="destinationselector form-control" required>
                            <option disabled hidden selected value="">Select destination</option>                            
                            <optgroup label="WP Kuala Lumpur">                                
                                <?php
                                while($data=mysqli_fetch_array($wpkl_group2))
                                {
                                    ?>
                                    <option value="<?php echo $data['id']; ?>"><?php echo $data['place']; ?></option>
                                    <?php 
                                }
                                    ?>
                            </optgroup>
                            <optgroup label="Penang">                                
                                <?php
                                while($data=mysqli_fetch_array($penang_group2))
                                {
                                    ?>
                                    <option value="<?php echo $data['id']; ?>"><?php echo $data['place']; ?></option>
                                    <?php 
                                }
                                    ?>
                            </optgroup>                                
                        </select>                        
                    </div>                                      

                    <div class="col-md-12 col-lg-6 col-sm-12 mt-10">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-lg-3 mt-10">
                                <label for="departureDate">Departure Date</label>
                                <input type="date" name="departureDate" id="departureDate" class="form-control text-center" placeholder="Depart"/>
                            </div>

                            <div class="col-md-6 col-sm-12 col-lg-3 mt-10">
                                <label for="returnDate">Return Date</label>
                                <input type="date" name="returnDate" id="returnDate" class="form-control text-center" placeholder="Return"/>
                            </div>

                            <div class="col-md-6 col-sm-12 col-lg-3 mt-10">
                                <label for="pax">Pax</label>
                                <select name="destination" onchange="person()" id="perPerson" class="form-control text-center" required>
                                    <option value="">Pax</option>                            
                                    <option value="1">1 Pax</option>
                                    <option value="2">2 Pax</option>
                                    <option value="3">3 Pax</option>
                                    <option value="4">4 Pax</option>                                                                   
                                </select>     
                            </div>

                            <div class="col-md-6 col-sm-12 col-lg-3 mt-10">
                                <label for=""></label>
                                <!-- <a href="train-availability.php" class="btn btn-info form-control">SEARCH</i></a> -->
                                <button class="btn btn-info form-control shadow" type="submit" name="submit">SEARCH</button>
                            </div>

                        </div>
                    </div>



                </div>
            </form>
            
        </div>
     
    </div>

    <!-- footer -->
    <?php require "footer.php"; ?>  

    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../fontawesome/js/all.min.js"></script>
    <script src="script.js"></script>
    
</body>
</html>
<?php
    require "session-start.php";
    require "../js/connect.php";

    // $queryLane = mysqli_query($con, "SELECT lane.*, city.place AS depart_name FROM lane JOIN city ON lane.depart=city.id" );
    $queryLane = mysqli_query($con, "SELECT * FROM services");
    $totalQueryLane = mysqli_num_rows($queryLane);
    $wpkl_group = mysqli_query($con, "SELECT * FROM city WHERE state='WP Kuala Lumpur'");
    $penang_group = mysqli_query($con, "SELECT * FROM city WHERE state='Penang'");
    $wpkl_group2 = mysqli_query($con, "SELECT * FROM city WHERE state='WP Kuala Lumpur'");
    $penang_group2 = mysqli_query($con, "SELECT * FROM city WHERE state='Penang'");
    $wpkl_group3 = mysqli_query($con, "SELECT * FROM city WHERE state='WP Kuala Lumpur'");
    $penang_group3 = mysqli_query($con, "SELECT * FROM city WHERE state='Penang'");
    $wpkl_group4 = mysqli_query($con, "SELECT * FROM city WHERE state='WP Kuala Lumpur'");
    $penang_group4 = mysqli_query($con, "SELECT * FROM city WHERE state='Penang'");
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Management System | Train Service</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../css/style-adminpanel.css">
</head>

<style>
    body
    {
        background: linear-gradient(180deg,#eee5c1, #dabb86);
    }
</style>

<body>
    

    <div class="service-available">
        <?php require "navbar.php" ?>
        <div class="container mt-5"> 
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="../adminpanel" class="no-decoration text-muted">
                            <i class="fas fa-home"></i> Home</a></li>
                        
                        <li class="breadcrumb-item active" aria-current="page">Train Service</li>
                </ol>
            </nav>

            <!-- add detail service available -->
            <div class="my-5 input-box">

                <form action="" method="post">
                    <div class="row">
                        <div class="col-6">
                            <label for="depart" class="fw-bold fs-3">Depart</label>
                            <select name="departSelect" id="departSelect" class="form-control" required>
                                <option value="">Please choose depart lane</option>
                                <optgroup label="WP Kuala Lumpur">                                
                                    <?php
                                    while($data=mysqli_fetch_array($wpkl_group))
                                    {
                                        ?>
                                        <option value="<?php echo $data['place']; ?>"><?php echo $data['place']; ?></option>
                                        <?php 
                                    }
                                        ?>
                                </optgroup>
                                <optgroup label="Penang">                                
                                    <?php
                                    while($data=mysqli_fetch_array($penang_group))
                                    {
                                        ?>
                                        <option value="<?php echo $data['place']; ?>"><?php echo $data['place']; ?></option>
                                        <?php 
                                    }
                                        ?>
                                </optgroup>   
                            </select>
                        </div>

                        <div class="col-6">
                            <label for="return" class="fw-bold fs-3">Return</label>
                            <select name="returnSelect" id="returnSelect" class="form-control" required>
                                <option value="">Please choose return lane</option>
                                <optgroup label="WP Kuala Lumpur">                                
                                    <?php
                                    while($data=mysqli_fetch_array($wpkl_group2))
                                    {
                                        ?>
                                        <option value="<?php echo $data['place']; ?>"><?php echo $data['place']; ?></option>
                                        <?php 
                                    }
                                        ?>
                                </optgroup>
                                <optgroup label="Penang">                                
                                    <?php
                                    while($data=mysqli_fetch_array($penang_group2))
                                    {
                                        ?>
                                        <option value="<?php echo $data['place']; ?>"><?php echo $data['place']; ?></option>
                                        <?php 
                                    }
                                        ?>
                                </optgroup>   
                            </select>
                        </div>
                    </div>

                    <div class = "row mt-3">
                        <div class="col-sm">
                            <label for="" class="fw-bold fs-5">Train name</label>
                            <input type="text" id="name" name="name" placeholder="Please input train name"
                            class="form-control">
                        </div>

                        <div class="col-sm">
                            <label for="" class="fw-bold fs-5">Date</label>
                            <input type="date" id="depart-date" name="depart-date" placeholder="Please input departure date" 
                            class="form-control">
                        </div>

                        <div class="col-sm">
                            <label for="" class="fw-bold fs-5">Departure Time</label>
                            <input type="time" id="depart-time" name="depart-time" placeholder="Please input departure time" 
                            class="form-control">
                        </div>                        

                        <div class="col-sm">
                            <label for="" class="fw-bold fs-5">Arrival Time</label>
                            <input type="time" id="arrival-time" name="arrival-time" placeholder="Please input arrival time" 
                            class="form-control">
                        </div>

                        <div class="col-sm">
                            <label for="" class="fw-bold fs-5">Duration</label>
                            <input type="text" id="duration" name="duration" placeholder="Please input duration" 
                            class="form-control">
                        </div>

                        <div class="col-sm">
                            <label for="" class="fw-bold fs-5">Available Seats</label>
                            <input type="number" id="seat" name="seat" placeholder="Please input seat available" 
                            class="form-control">
                        </div>

                        <div class="col-sm">
                            <label for="" class="fw-bold fs-5">Fare</label>
                            <input type="number" id="fare" name="fare" placeholder="Please input fare" 
                            class="form-control">
                        </div>
                    </div>

                    <div class="py-5 px-3">
                        <button class="btn btn-warning form-control shadow" type="submit" name="submit">Submit</button>
                    </div>
                </form>

                <?php
                    if(isset($_POST['submit']))
                    {
                        $depart =htmlspecialchars($_POST['departSelect']);
                        $arrival =htmlspecialchars($_POST['returnSelect']);
                        $trainname = htmlspecialchars($_POST['name']);
                        $datetravel = date('Y-m-d',strtotime($_POST['depart-date']));
                        $timedepart = htmlspecialchars($_POST['depart-time']);
                        $timearrival = htmlspecialchars($_POST['arrival-time']);
                        $duration = htmlspecialchars($_POST['duration']);
                        $seat = htmlspecialchars($_POST['seat']);
                        $fare = number_format($_POST['fare'],2);

                        $queryExist = mysqli_query($con, "SELECT * FROM services WHERE origin='$depart' AND destination='$arrival' AND 
                        name='$trainname' AND departtime='$timedepart' AND arrivaltime='$timearrival' AND duration='$duration' AND 
                        seat='$seat' AND fare='$fare' AND datetravel='$datetravel'");

                        $totalNewDataCity = mysqli_num_rows($queryExist);

                        if($totalNewDataCity > 0)
                        {
                            ?>
                            <div class="alert alert-warning mt-3" role="alert">
                                Category is already existed!
                            </div>
                            <?php
                        }
                        else
                        {
                            $querySubmit = mysqli_query($con, "INSERT INTO services (origin, destination, name, departtime, arrivaltime,
                            duration, seat, fare, datetravel) VALUES ('$depart', '$arrival', '$trainname', '$timedepart', '$timearrival',
                            '$duration', '$seat', '$fare', '$datetravel')");

                            if($querySubmit)
                            {
                                ?>
                                <div class="alert alert-primary mt-3" role="alert">
                                    The place successfully insert!
                                </div>
                                <meta http-equiv="refresh" content="2; url=service.php"/>
                                <?php
                            }
                            else
                            {
                                echo mysqli_error($con);
                            }
                        }
                    }
                ?>
            </div>

            <!--- list places -->
            <div class="mt-3">
                <h2>List of Schedule Train Services</h2>

                <div class="outer-wrapper text-center table-responsive mt-5">
                    <table class="table table-wrapper shadow">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Depart</th>
                                <th>Return</th>
                                <th>Train Name</th>
                                <th>Date</th>
                                <th>Departure Time</th>
                                <th>Arrival Time</th>
                                <th>Duration</th>
                                <th>Available Seats</th>
                                <th>Fare</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                if($totalQueryLane==0)
                                {
                                    ?>
                                    <tr>
                                        <td colspan=11 class="text-center">No data insert</td>
                                    </tr>
                                    <?php
                                }
                                else
                                {
                                    $number=1;
                                    while($data=mysqli_fetch_array($queryLane))
                                    {
                                        ?>
                                        <tr>
                                            <td><?php echo $number; ?></td>
                                            <td><?php echo $data['origin']; ?></td>
                                            <td><?php echo $data['destination']; ?></td>
                                            <td><?php echo $data['name']; ?></td>
                                            <td><?php echo $data['datetravel']; ?></td>
                                            <td><?php echo $data['departtime']; ?></td>
                                            <td><?php echo $data['arrivaltime']; ?></td>
                                            <td><?php echo $data['duration']; ?></td>
                                            <td><?php echo $data['seat']; ?></td>
                                            <td>RM <?php echo number_format($data['fare'],2); ?></td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" 
                                                    data-bs-target="#modalUpdate<?php echo $data['id']; ?>"><i class="fas fa-search"></i>
                                                </button>

                                                <!------------------------------------------------------------ Modal ------------------------------------------------>
                                                <div class="modal fade" id="modalUpdate<?php echo $data['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" 
                                                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-xl">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Place</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>

                                                            <div class="modal-body">                                                       
                                                                <form action="" method="post">
                                                                    <div class="row">
                                                                        <div class="col-6 mb-3">
                                                                            <label for="modaldepart">Depart</label>
                                                                            <input type="text" id="modaldepart" name="modaldepart" value="<?php echo $data['origin']; ?>"
                                                                            class="form-control">
                                                                        </div>

                                                                        <div class="col-6 mb-3">
                                                                            <label for="modalreturn">Return</label>                                                                        
                                                                            <input type="text" id="modalreturn" name="modalreturn" value="<?php echo $data['destination']; ?>"
                                                                            class="form-control">
                                                                        </div>

                                                                        <div class="col-6 mb-3">
                                                                            <label for="" class="">Train name</label>
                                                                            <input type="text" id="modalname" name="modalname" value="<?php echo $data['name']; ?>"
                                                                            class="form-control">
                                                                        </div>

                                                                        <div class="col-6 mb-3">
                                                                            <label for="" class="">Date</label>
                                                                            <input type="date" id="modal-depart-date" name="modal-depart-date" value="<?php echo $data['datetravel']; ?>" 
                                                                            class="form-control">
                                                                        </div>

                                                                        <div class="col-6 mb-3">
                                                                            <label for="" class="">Departure Time</label>
                                                                            <input type="time" id="modal-depart-time" name="modal-depart-time" value="<?php echo $data['departtime']; ?>" 
                                                                            class="form-control">
                                                                        </div>                        

                                                                        <div class="col-6 mb-3">
                                                                            <label for="" class="">Arrival Time</label>
                                                                            <input type="time" id="modal-arrival-time" name="modal-arrival-time" value="<?php echo $data['arrivaltime']; ?>" 
                                                                            class="form-control">
                                                                        </div>

                                                                        <div class="col-6 mb-3">
                                                                            <label for="" class="">Duration</label>
                                                                            <input type="text" id="modalduration" name="modalduration" value="<?php echo $data['duration']; ?>" 
                                                                            class="form-control">
                                                                        </div>

                                                                        <div class="col-6 mb-3">
                                                                            <label for="" class="">Available Seats</label>
                                                                            <input type="number" id="modalseat" name="modalseat" value="<?php echo $data['seat']; ?>" 
                                                                            class="form-control">
                                                                        </div>

                                                                        <div class="col-6 mb-3">
                                                                            <label for="" class="">Fare</label>
                                                                            <input type="number" id="modalfare" name="modalfare" value="<?php echo $data['fare']; ?>" 
                                                                            class="form-control">
                                                                        </div>
                                                                    </div>

                                                                    <input type="hidden" name="id" class="col-3" value="<?php echo $data['id']; ?>">

                                                                    <div class="py-3 d-flex justify-content-between">
                                                                        <button type="submit" class="btn btn-warning" name="editBtn">Edit</button>
                                                                        <button type="submit" class="btn btn-danger" name="deleteBtn">Delete</button>
                                                                    </div>                                    
                                                                </form>
                                                            

                                                                <?php
                                                                    if(isset($_POST['editBtn']))
                                                                    {
                                                                        $departModal = htmlspecialchars($_POST['modaldepart']);
                                                                        echo $departModal;
                                                                        $returnModal = htmlspecialchars($_POST['modalreturn']);
                                                                        echo $returnModal;
                                                                        $id = htmlspecialchars($_POST['id']);
                                                                        echo $id;
                                                                        $trainnameModal = htmlspecialchars($_POST['modalname']);
                                                                        echo $trainnameModal;
                                                                        $datetravelModal = date('Y-m-d',strtotime($_POST['modal-depart-date']));
                                                                        echo $datetravelModal;
                                                                        $timedepartModal = htmlspecialchars($_POST['modal-depart-time']);
                                                                        echo $timedepartModal;
                                                                        $timearrivalModal = htmlspecialchars($_POST['modal-arrival-time']);
                                                                        echo $timearrivalModal;
                                                                        $durationModal = htmlspecialchars($_POST['modalduration']);
                                                                        echo $durationModal;
                                                                        $seatModal = htmlspecialchars($_POST['modalseat']);
                                                                        echo $seatModal;
                                                                        $fareModal = number_format($_POST['modalfare'],2);
                                                                        echo $fareModal;

                                                                        
                                                                        $query = mysqli_query($con, "SELECT * FROM services WHERE origin='$departModal' AND destination='$returnModal' AND name='$trainnameModal' AND
                                                                        datetravel='$datetravelModal' AND departtime='$timedepartModal' AND arrivaltime='$timearrivalModal' AND duration='$durationModal' AND
                                                                        seat='$seatModal' AND fare='$fareModal'");
                                                                        $totalData = mysqli_num_rows($query);

                                                                        if($totalData > 0)
                                                                        {
                                                                            ?>
                                                                            <div class="alert alert-warning mt-3" role="alert">
                                                                                Category is alreay existed!
                                                                            </div>
                                                                            <?php
                                                                        }
                                                                        else
                                                                        {
                                                                            $queryUpdate = mysqli_query($con, "UPDATE services SET origin='$departModal', destination='$returnModal', name='$trainnameModal',
                                                                            datetravel='$datetravelModal', departtime='$timedepartModal', arrivaltime='$timearrivalModal', duration='$durationModal',
                                                                            seat='$seatModal', fare='$fareModal' WHERE id='$id'");

                                                                            if($queryUpdate)
                                                                            {
                                                                                ?>
                                                                                <div class="alert alert-primary mt-3" role="alert">
                                                                                    Categories successfully updated!
                                                                                </div>
                                                                                <meta http-equiv="refresh" content="2; url=service.php"/>
                                                                                <?php
                                                                            }
                                                                            else
                                                                            {
                                                                                echo mysqli_error($con);
                                                                            }
                                                                        }                                                                        
                                                                    }

                                                                    if(isset($_POST['deleteBtn']))
                                                                    {
                                                                        // $queryCheck = mysqli_query($con, "SELECT * FROM product WHERE categories_id='$id'");
                                                                        // $dataCount = mysqli_num_rows($queryCheck);
                                                                        // // echo $dataCount;
                                                                        // // die();

                                                                        // if($dataCount>0)
                                                                        // {
                                                                        //     ?>
                                                                        //     <div class="alert alert-warning mt-3" role="alert">
                                                                        //         Category cannot be delete due use in product
                                                                        //     </div>
                                                                        //     <?php
                                                                        //     die();
                                                                        // }
                                                                        $id = htmlspecialchars($_POST['id']);

                                                                        $queryDelete = mysqli_query($con, "DELETE FROM services WHERE id='$id'");

                                                                        if($queryDelete)
                                                                        {
                                                                            ?>
                                                                                <div class="alert alert-primary mt-3" role="alert">
                                                                                    Category successfully deleted!
                                                                                </div>

                                                                                <meta http-equiv="refresh" content="0; url=service.php" />
                                                                            <?php
                                                                        }
                                                                        else
                                                                        {
                                                                            echo mysqli_error($con);
                                                                        }
                                                                    }










                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                        $number++;


                                        
                                    }
                                }   
                                
                                ?>
                        </tbody>                
                            
                    </table>
                </div>
            </div>

            

            
        </div>
    </div>
    
    
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../fontawesome/js/all.min.js"></script>

</body>
</html>
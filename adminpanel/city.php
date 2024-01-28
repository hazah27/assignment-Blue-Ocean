<?php
    require "session-start.php";
    require "../js/connect.php";

    $queryCity = mysqli_query($con, "SELECT * FROM city");
    $totalQueryCity = mysqli_num_rows($queryCity);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Management System | Travel Place</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../css/style-adminpanel.css">
</head>

<body>
    

    <div class="city">
        <?php require "navbar.php" ?>
        <div class="container mt-5"> 
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="../adminpanel" class="no-decoration text-muted">
                            <i class="fas fa-home"></i> Home</a></li>
                        
                        <li class="breadcrumb-item active" aria-current="page">Travel Place</li>
                </ol>
            </nav>

            <!-- add origin and destination place -->
            <div class="my-5 input-box">

                <form action="" method="post">
                    <div class="row">
                        <div class="col-6">
                            <label for="city" class="fw-bold fs-3">Add City</label>
                            <input type="text" id="city" name="city" placeholder="Please input the city"
                            class="form-control">
                        </div>

                        <div class="col-6">
                            <label for="state" class="fw-bold fs-3">Add Country</label>
                            <input type="text" id="state" name="state" placeholder="Please input the country"
                            class="form-control">
                        </div>
                    </div>

                    <div class="py-3 px-3">
                        <button class="btn btn-warning form-control shadow" type="submit" name="submit">Submit</button>
                    </div>
                </form>

                <?php
                    if(isset($_POST['submit']))
                    {
                        $city =htmlspecialchars($_POST['city']);
                        $state =htmlspecialchars($_POST['state']);

                        $queryExist = mysqli_query($con, "SELECT * FROM city WHERE place='$city' AND state='$state'");
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
                            $querySubmit = mysqli_query($con, "INSERT INTO city (state, place) VALUES ('$state', '$city')");

                            if($querySubmit)
                            {
                                ?>
                                <div class="alert alert-primary mt-3" role="alert">
                                    The place successfully insert!
                                </div>
                                <meta http-equiv="refresh" content="2; url=city.php"/>
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
                <h2>List of Travel Place</h2>

                <div class="outer-wrapper table-responsive mt-5">
                    <table class="table table-wrapper shadow">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>City</th>
                                <th>Country</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                if($totalQueryCity==0)
                                {
                                    ?>
                                    <tr>
                                        <td colspan=4 class="text-center">No city data insert!!!</td>
                                    </tr>
                                    <?php
                                }
                                else
                                {
                                    $number=1;
                                    while($data=mysqli_fetch_array($queryCity))
                                    {
                                        ?>
                                        <tr>
                                            <td><?php echo $number; ?></td>
                                            <td><?php echo $data['place']; ?></td>
                                            <td><?php echo $data['state']; ?></td>
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
                                                                        <div class="col-6">
                                                                            <label for="modalcity">City</label>
                                                                            <input type="text" name="modalcity" id="modalcity" class="form-control" 
                                                                            value="<?php echo $data['place']; ?>">
                                                                        </div>

                                                                        <div class="col-6">
                                                                            <label for="modalstate">Country</label>
                                                                            <input type="text" name="modalstate" id="modalstate" class="form-control" 
                                                                            value="<?php echo $data['state']; ?>">
                                                                        </div>
                                                                    </div>

                                                                    <input type="hidden" name="id" class="mt-3 form-control" value="<?php echo $data['id']; ?>">

                                                                    <div class="py-3 d-flex justify-content-between">
                                                                        <button type="submit" class="btn btn-warning" name="editBtn">Edit</button>
                                                                        <button type="submit" class="btn btn-danger" name="deleteBtn">Delete</button>
                                                                    </div>                                    
                                                                </form>
                                                            

                                                                <?php
                                                                    if(isset($_POST['editBtn']))
                                                                    {
                                                                        $cityModal = htmlspecialchars($_POST['modalcity']);
                                                                        $stateModal = htmlspecialchars($_POST['modalstate']);
                                                                        $id = htmlspecialchars($_POST['id']);

                                                                        if($data['place']==$cityModal || $data['state']==$stateModal)
                                                                        {
                                                                            ?>
                                                                            <meta http-equiv="refresh" content="0; url=city.php"/>
                                                                            <?php
                                                                        }
                                                                        else
                                                                        {
                                                                            $query = mysqli_query($con, "SELECT * FROM city WHERE place='$cityModal' AND state='$stateModal'");
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
                                                                                $queryUpdate = mysqli_query($con, "UPDATE city SET place='$cityModal', state='$stateModal' WHERE id='$id'");

                                                                                if($queryUpdate)
                                                                                {
                                                                                    ?>
                                                                                    <div class="alert alert-primary mt-3" role="alert">
                                                                                        Categories successfully updated!
                                                                                    </div>
                                                                                    <meta http-equiv="refresh" content="2; url=city.php"/>
                                                                                    <?php
                                                                                }
                                                                                else
                                                                                {
                                                                                    echo mysqli_error($con);
                                                                                }
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

                                                                        $queryDelete = mysqli_query($con, "DELETE FROM city WHERE id='$id'");

                                                                        if($queryDelete)
                                                                        {
                                                                            ?>
                                                                                <div class="alert alert-primary mt-3" role="alert">
                                                                                    Category successfully deleted!
                                                                                </div>

                                                                                <meta http-equiv="refresh" content="0; url=city.php" />
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
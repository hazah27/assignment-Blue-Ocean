<?php
    require "session-start.php";
    require "../js/connect.php";

    // $queryLane = mysqli_query($con, "SELECT lane.*, city.place AS depart_name FROM lane JOIN city ON lane.depart=city.id" );
    $queryLane = mysqli_query($con, "SELECT * FROM lane");
    $totalQueryLane = mysqli_num_rows($queryLane);
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
    <title>Ticket Management System | Train Lane</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../css/style-adminpanel.css">
</head>

<body>
    

    <div class="lane-transmission">
        <?php require "navbar.php" ?>
        <div class="container mt-5"> 
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="../adminpanel" class="no-decoration text-muted">
                            <i class="fas fa-home"></i> Home</a></li>
                        
                        <li class="breadcrumb-item active" aria-current="page">Train Lane</li>
                </ol>
            </nav>

            <!-- add origin and destination place -->
            <div class="my-5 input-box">

                <form action="" method="post">
                    <div class="row">
                        <div class="col-sm mx-1">
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

                        <div class="col-sm mx-1">
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

                        <div class="col-sm mx-1">
                            <label for="train-name" class="fw-bold fs-3">Coach Name</label>
                            <input type="text" id="train-name" name="train-name" placeholder="Please input train name" class="form-control">
                        </div>
                    </div>

                    <div class="py-3 px-3">
                        <button class="btn btn-warning form-control shadow" type="submit" name="submit">Submit</button>
                    </div>
                </form>

                <?php
                    if(isset($_POST['submit']))
                    {
                        $depart =htmlspecialchars($_POST['departSelect']);
                        $arrival =htmlspecialchars($_POST['returnSelect']);
                        $coach =htmlspecialchars($_POST['train-name']);

                        $queryExist = mysqli_query($con, "SELECT * FROM lane WHERE depart='$depart' AND arrival='$arrival' AND coach='$coach'");
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
                            $querySubmit = mysqli_query($con, "INSERT INTO lane (depart, arrival, coach) VALUES ('$depart', '$arrival', '$coach')");

                            if($querySubmit)
                            {
                                ?>
                                <div class="alert alert-primary mt-3" role="alert">
                                    The place successfully insert!
                                </div>
                                <meta http-equiv="refresh" content="2; url=lane.php"/>
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

            <!--- list lane -->
            <div class="mt-3">
                <h2>List of Lane</h2>

                <div class="outer-wrapper table-responsive mt-5">
                    <table class="table-wrapper table shadow">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Depart</th>
                                <th>Return</th>
                                <th>Coach Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                if($totalQueryLane==0)
                                {
                                    ?>
                                    <tr>
                                        <td colspan=5 class="text-center">No city data insert!!!</td>
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
                                            <td><?php echo $data['depart']; ?></td>
                                            <td><?php echo $data['arrival']; ?></td>
                                            <td><?php echo $data['coach']; ?></td>
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
                                                                        <div class="col-sm">
                                                                            <label for="modaldepart">Depart</label>
                                                                            <input type="text" name="modaldepart" id="modaldepart" class="form-control" 
                                                                            value="<?php echo $data['depart']; ?>">
                                                                        </div>

                                                                        <div class="col-sm">
                                                                            <label for="modalreturn">Return</label>
                                                                            <input type="text" name="modalreturn" id="modalreturn" class="form-control" 
                                                                            value="<?php echo $data['arrival']; ?>">
                                                                        </div>

                                                                        <div class="col-sm">
                                                                            <label for="modalreturn">Coach Name</label>
                                                                            <input type="text" name="modalcoach" id="modalcoach" class="form-control" 
                                                                            value="<?php echo $data['coach']; ?>">
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
                                                                        $departModal = htmlspecialchars($_POST['modaldepart']);
                                                                        $returnModal = htmlspecialchars($_POST['modalreturn']);
                                                                        $coachModal = htmlspecialchars($_POST['modalcoach']);
                                                                        $id = htmlspecialchars($_POST['id']);

                                                                
                                                                        $query = mysqli_query($con, "SELECT * FROM lane WHERE depart='$departModal' AND arrival='$returnModal' AND coach='$coachModal'");
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
                                                                            $queryUpdate = mysqli_query($con, "UPDATE lane SET depart='$departModal', arrival='$returnModal', coach='$coachModal' WHERE id='$id'");

                                                                            if($queryUpdate)
                                                                            {
                                                                                ?>
                                                                                <div class="alert alert-primary mt-3" role="alert">
                                                                                    Categories successfully updated!
                                                                                </div>
                                                                                <meta http-equiv="refresh" content="2; url=lane.php"/>
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

                                                                        $queryDelete = mysqli_query($con, "DELETE FROM lane WHERE id='$id'");

                                                                        if($queryDelete)
                                                                        {
                                                                            ?>
                                                                                <div class="alert alert-primary mt-3" role="alert">
                                                                                    Category successfully deleted!
                                                                                </div>

                                                                                <meta http-equiv="refresh" content="0; url=lane.php" />
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
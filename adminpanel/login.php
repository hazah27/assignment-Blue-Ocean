<?php
    session_start();
    require "../js/connect.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Management System | Login</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style-adminpanel.css">
</head>

<body>
    <div class="main d-flex flex-column justify-content-center align-items-center">
        <div class="login-box p-5">
            <form action="" method="post">
                <h1 class="text-center fw-bold">Login</h1>
                <div>
                    <input type="text" class="form-control bg-transparent text-light mb-3 mt-3" name="username" id="username" placeholder="Username" required>
                </div>

                <div>
                    <input type="password" class="form-control bg-transparent text-light" name="password" id="password" placeholder="Password" required>
                </div>

                <div>
                    <button class="btn btn-warning form-control text-light mt-4 mb-4" type="submit" name="loginbtn">Login</button>
                </div>
            </form>
        </div>

        <div class="mt-3" style="width:500px">
            <?php
                if(isset($_POST['loginbtn']))
                {
                    $username = htmlspecialchars($_POST['username']);
                    $password = htmlspecialchars($_POST['password']);
                    
                    $query = mysqli_query($con, "SELECT * FROM users WHERE username='$username'");
                    $countdata = mysqli_num_rows($query);
                    $data = mysqli_fetch_array($query);
                    
                    if($countdata > 0)
                    {
                        if(password_verify($password, $data['password']))
                        {
                            $_SESSION['username'] = $data['username'];
                            $_SESSION['login'] = true;
                            header('location: ../adminpanel');
                        }
                        else
                        {
                            ?>
                                <div class="alert alert-warning" role="alert">
                                    Wrong password!
                                </div>
                            <?php
                        }
                    }
                    else
                    {
                        ?>
                            <div class="alert alert-warning" role="alert">
                                Account not register! 
                            </div>
                        <?php
                    }
                }
            ?>
        </div>
    </div>
    
</body>
</html>
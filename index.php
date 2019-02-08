<?php
/**
 * Created by PhpStorm.
 * User: Karim K. Kanji
 * Date: 18/01/2019
 * Time: 09:14
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>Sign Up</title>
    <style>
        #mainForm{
            margin: 20px;
        }
        #mainCard{
            margin-top: 20px;
        }
        #mainHeader{
            margin-top: 10px;
            margin-left: 10px;
        }
        #notifications{
            margin-top:20px;
        }
        #login{
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-md-3" id="notifications">
                <?php
                if(isset($_POST['sendData'])){
                    $fname=$_POST['fname'];
                    $lname=$_POST['lname'];
                    $uname=$_POST['uname'];
                    $password_user=$_POST['pass'];
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "class_crud";

// Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "SELECT uname FROM zalego where uname='$uname'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        echo "<div class='alert alert-danger alert-dismissible fade show'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Error!</strong> It seems you are already registered!</div>";
                    } else {
                        $sql = "INSERT INTO zalego(fname, lname, uname, pass) VALUES ('$fname', '$lname', '$uname','$password_user')";

                        if ($conn->query($sql) === TRUE) {
                            echo "<div class=\"alert alert-success alert-dismissible fade show\"> <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button><strong>Success!</strong> ".$uname." was added successfully.</div>";
                        } else {
                            echo "<div class='alert alert-danger alert-dismissible fade show'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Error!</strong>  Unable to add the user!</div>";
                        }
                    }
                    $conn->close();
                }
                ?>
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="card" id="mainCard">
                    <h3 id="mainHeader">Register here</h3>
                    <hr/>
                    <form method="post" action="" id="mainForm">
                        <label>First Name</label>
                        <input class="form-control" type="text" placeholder="First Name" name="fname" required/>
                        <label>Last Name</label>
                        <input class="form-control" type="text" placeholder="Last Name" name="lname" required/>
                        <label>Username</label>
                        <input class="form-control" type="text" placeholder="Username" name="uname" required/>
                        <label>Password</label>
                        <input class="form-control" type="password" placeholder="Password" name="pass" required/>
                        <hr/>
                        <div class="float-right">
                            <input class="btn btn-success" type="submit" name="sendData" value="Sign me up"/>
                            <input class="btn btn-warning" type="reset" value="Clear everything"/>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-3 col-md-3" id="login">
                <div class="card">
                    <div class="card-body">
                        Have an account?<br/><br/>
                        <a href="login.php"><button class="btn btn-primary btn-block">Sign in</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

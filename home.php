<?php
/**
 * Created by PhpStorm.
 * User: Karim K. Kanji
 * Date: 18/01/2019
 * Time: 09:14
 */
session_start();
if($_SESSION['clid']== null){
    header("location:./login.php");
    die();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <title>Sign Up</title>
    <style>
        #mainCard{
            margin-top: 20px;

        }
        #mainHeader{
            margin-top: 10px;
            margin-left: 10px;
        }
        #quickAction{
            margin-top: 20px;
        }
        #cardBody{
            margin: 20px;
        }
        .chip {
            display: inline-block;
            padding: 0 25px;
            height: 50px;
            font-size: 16px;
            line-height: 50px;
            border-radius: 25px;
            background-color: #f1f1f1;
        }

        .chip img {
            float: left;
            margin: 0 10px 0 -25px;
            height: 50px;
            width: 50px;
            border-radius: 50%;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-9">
            <div class="card" id="mainCard">
                <div id="cardBody">
                <h5>Data Stored</h5>
                    <br/>
                <?php
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

                $sql = "SELECT id,fname, lname, uname FROM zalego";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo'<div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>id</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>username</th>
            </tr>
          </thead>
          <tbody>';
                    while($row = $result->fetch_assoc()){
                        echo "<tr><td>". $row["id"]. "</td><td> " . $row["fname"]. "</td><td>" . $row["lname"]. "</td><td>" . $row["uname"]. "</td></tr>";
                    }
                    echo "</tbody></table></div>";
                } else {
                    echo "0 records found";
                }
                $conn->close();
                ?>
                </div>
            </div>
        </div>

        <div class="col-sm-3 col-md-3">
            <div id="quickAction">
                <div class="chip">
                    <img src="img_avatar.png" alt="Person" width="96" height="96">
                    <?php
                    echo  $_SESSION['cl_fname'].' '.$_SESSION['cl_lname'];
                    ?>
                </div>

            </div>
            <div class="card" id="quickAction">
                <h5 id="mainHeader">Quick Actions</h5>
                <div class="card-body">
                    <form action="" method="post">
                    <button class="btn btn-danger btn-block" name="signout"> Sign out</button>
                    </form>
                    <?php
                    if(isset($_POST['signout'])){
                        session_destroy();
                        echo "<script language='javascript'>window.location.href = 'home.php'</script>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

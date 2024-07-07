<!DOCTYPE html>
<html lang="en">
<head>
<?php
    
    include("../includes/connection.inc.php");
        
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registration Form</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/startmin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <style>
        body {
            /* Gradient background color */
            background: linear-gradient(to right, #007bff, #0056b3);
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                <h3 class="panel-title" style="text-align: center; font-weight: bold;">Registration Form</h3>

                </div>
                <div class="panel-body">
                    <form action="../actions/add-account.php" method="post">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Full Name " name="auser" type="text" autofocus required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="apass" type="password" required>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="arole" required>
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>

                                </select>
                            </div>
                            <button type="submit" name= "submit" class="btn btn-lg btn-primary btn-block">Register</button>
                        </fieldset>
                    </form>
                    <br>
                    <p style="background-color: ; text-align: center; font-weight: bold; color: blue;">
                    <a href="login.php">Login here</a>
                 </p>
                 <p style="text-align: center; font-weight: bold; color: red;">
    <?php
    // Check if an error parameter exists in the URL
    if (isset($_GET['error'])) {
        $error = $_GET['error'];
        if ($error == 'username_exists') {
            echo "Error: Username already exists";
        } elseif ($error == 'success') {
            echo "Registration successful!";
        } else {
            echo "Error: " . htmlspecialchars(urldecode($error));
        }
    }
    ?>
</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="../js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../js/startmin.js"></script>

</body>
</html>

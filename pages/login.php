<?php
session_start();
include("../includes/connection.inc.php");

$username = "";
$password = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $conn = new Connection();
    $pdo = $conn->open();

    $stmt = $pdo->prepare("SELECT * FROM account WHERE acc_user = :username");
    $stmt->bindParam(":username", $username);
    $stmt->execute();
    $result = $stmt->fetch();

    if ($result && $result["acc_pass"] == $password) {
   
        $_SESSION["user_id"] = $result["acc_id"];
        $_SESSION["user_role"] = $result["acc_role"];
        $_SESSION["username"] = $result["acc_user"]; 

        if ($result["acc_role"] == "admin") {
            header("Location: ../admin/pages/dashboard.php");
        } elseif ($result["acc_role"] == "user") {
            header("Location: ../staff/pages/firstpage.php");
        }elseif ($result["acc_role"] == "owner") {
            header("Location: ../owner/pages/dashboard.php");
        }
        exit(); // Stop further execution
    } else {
        // Authentication failed, display error message
        $error = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rehub - Login</title>

    <style>
        body {
            /* Gradient background color */
            background: linear-gradient(to right, #007bff, #0056b3);
        }
    </style>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/metisMenu.min.css" rel="stylesheet">
    <link href="../css/startmin.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                <h5 class="panel-title" style="text-align: center; font-weight: bold; color: blue; font-size: larger;">ReHub</h5>

                <p></p>
                <h3 class="panel-title" style="text-align: center; font-weight: bold; color: black;">Account Log In</h3>
                </div>
                <div class="panel-body">
                    <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Full Name" name="username" type="text" autofocus required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" required>
                            </div>
                            
                            <button type="submit" class="btn btn-lg btn-primary btn-block">Login</button>
                        </fieldset>
                        <br>
                        <p style="text-align: center;">Don't have an account? <a href="register.php" style="color: blue;">Register here</a></p>


                    </form>
                    <p style="color: red; text-align: center;"><?php echo $error; ?></p>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/metisMenu.min.js"></script>
<script src="../js/startmin.js"></script>

</body>
</html>

<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>ReHub - Staff</title>
        
        <link href="../css/bootstrap.min.css" rel="stylesheet">  
        <link href="../css/metisMenu.min.css" rel="stylesheet">    
        <link href="../css/dataTables/dataTables.bootstrap.css" rel="stylesheet">     
        <link href="../css/dataTables/dataTables.responsive.css" rel="stylesheet">
        <link href="../css/startmin.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
        
        
    </head>
    <style>
        .sidebar {
            list-style-type: none;
            padding: 0;
        }
        .sidebar-search input {
            width: 100%;
        }

        .sidebar w {
            display: block;
            font-size: 18px; 
            border: 2px solid white; 
            padding: 10px; 
            border-radius: 8px; 
        }

        .sidebar w  {
            font-size: 18px; 
            color: rgb(0, 0, 139);
            text-align: center;
        }
    </style>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <a class="navbar-brand" href="firstpage.php">
        <i class="fa fa-home fa-fw"></i>ReHubCebu
    </a>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

               
                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i>
                            <?php
                            // Fetch the username from the session
                            if (isset($_SESSION["username"])) {
                                $username = $_SESSION["username"];
                                echo $username;
                            } else {
                                echo "Guest";
                            }
                            ?>
                            <b class="caret"></b>
                        </a>

                    <ul class="dropdown-menu dropdown-user" style="color: white;">
                       
                        <li><a href="/CMMS/pages/login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>


            <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                            <w href="#"> 
                                <span style="font-family: 'Arial Black', Arial, sans-serif; font-size: 15px; font-weight: bold;">Home Repairs</span>
                            </w>

                            <li>
                                        <a href="../pages/firstpage.php"><i class="fa fa-list-alt fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                        <a href="../pages/dashboard.php"><i class="fa fas fa-tasks fa-fw"></i> Ongoing Services</a>
                            </li>
                            <li>
                                <li>
                                        <a href="../pages/tools.php"><i class="fa fas fa-tools fa-fw"></i> Request Equipment</a>
                                </li>
                                <li>
                                        <a href="../pages/asset.php"><i class="fa fas fa-archive fa-fw"></i> Asset Management </a>
                                </li>
                                <li>
                                        <a href="../pages/maintenanceschedule.php"><i class="fa fas fa-wrench fa-fw"></i> Maintenance Schedule</a>
                                </li>
                                <li>
                                        <a href="../pages/history.php"><i class="fa fas fa-clipboard-check fa-fw"></i> Completed Services</a>
                                </li>
                            <li>
                               
            </nav>

            <div id="page-wrapper">
                <div class="container-fluid">
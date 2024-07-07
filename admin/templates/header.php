<!DOCTYPE html>
<html lang="en">
    <head>
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
            font-size: 18px; /* Adjust the font size as needed */
            border: 2px solid white; /* Add a white border */
            padding: 10px; /* Add padding for better visual */
            border-radius: 8px; /* Optional: add border-radius for rounded corners */
        }

        .sidebar w  {
            font-size: 18px; /* Adjust the icon size as needed */
            color: rgb(0, 0, 139);
            text-align: center;
        }
    </style>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>ReHub - Admin</title>
        
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/metisMenu.min.css" rel="stylesheet">
        <link href="../css/dataTables/dataTables.bootstrap.css" rel="stylesheet">
        <link href="../css/dataTables/dataTables.responsive.css" rel="stylesheet">
        <link href="../css/startmin.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
    <a class="navbar-brand" href="dashboard.php">
        <i class="fa fa-home fa-fw"></i>ReHubCebu
    </a>
</div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                

                <ul class="nav navbar-right navbar-top-links">
                 
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> Admin <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="/CMMS/pages/login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                            <w href="#"> 
                                <span style="font-family: 'Arial Black', Arial, sans-serif; font-size: 15px; font-weight: bold;">Home Repairs</span>
                            </w>
                               
                            </li>
                            <li>
                                        <a href="../pages/dashboard.php"><i class="fa fa-list-alt fa-fw"></i> ReHub Dashboard</a>
                                    </li>
                            <li>    
                                
                                <li>
                                    <a href="../pages/staff.php">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fas fa-address-card fa-fw"></i> Employee Information</a>
                                </li>
                            
                            </li>

                            <li>
                  
                                    <li>
                                        <a href="../pages/workorder.php">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fas fa-list fa-fw"></i> Services</a>              
                                        <a href="../pages/servicereq.php">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fas fa-sticky-note fa-fw"></i> Service Request</a>
                                        <a href="../pages/completedorder.php">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fas fa-folder fa-fw"></i> Completed Services</a>
                                    </li>
                            </li>

                                    <li>
                                        <a href="../pages/asset.php">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fas fa-book fa-fw"></i> Assets Management</a>
                                        <a href="../pages/assetmaintenance.php">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fas fa-folder fa-fw"></i> Asset History</a>
                                    </li>
                            </li>

                            <li>
                                    <li>
                                        <a href="../pages/inventory.php">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fas fa-toolbox fa-fw"></i> Tools Management</a>
                                        <a href="../pages/tool-history.php">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fas fa-folder fa-fw"></i> Tool Used Tracker History</a>
                                </li>
                            <li>

                            <li>
    
                                    <li>
                                        <a href="../pages/maintenanceschedule.php">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fas fa-file-alt fa-fw"></i> Maintance Schedule</a>
                                        <a href="../pages/maintenancehistory.php">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fas fa-folder fa-fw"></i> Totally Damaged Asset</a>
                                    </li>
                                   
                                </ul>
                            </li>
                           
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <div id="page-wrapper">
                <div class="container-fluid">
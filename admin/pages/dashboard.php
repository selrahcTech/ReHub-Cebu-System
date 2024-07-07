<?php
    include("../templates/header.php");
    include("../includes/connection.inc.php");
?>
 
 <style>
        body {
            background-color: #000;
            color: #fff;
        }
        .chart-container {
                        width: 40%;
                        display: inline-block;
                    }

        .panel-primary, .panel-green, .panel-red {
            background-color: #222;
            color: #fff;
            border-color: #444;
        }

        .panel-heading {
            background-color: #408EFB;
            border-color: #001738;
            color: #fff;
        }

        .panel-footer {
            background-color: #408EFB;
            border-color: #001738;
            color: #fff;
        }

        .panel-footer a {
            color: #fff;
        }

        .panel-footer a:hover {
            color: #fff;
        }

        .fa {
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-black">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa far fa-address-card fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">
                                    <?php
                                    // PHP code to get total order details
                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $dbname = "cmms";
                                    $con = mysqli_connect($servername, $username, $password, $dbname);

                                    // Modified SQL query to get total staff where s_work is blank
                                    $sql = "SELECT COUNT(s_id) AS total FROM staff WHERE s_work = ''";
                                    $result = mysqli_query($con, $sql);
                                    $values = mysqli_fetch_assoc($result);
                                    $num_rows = $values['total'];
                                    echo $num_rows;
                                    ?>
                                </div>
                                <div>Total Staff!</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <span class="pull-left"><a href="../pages/staff.php">View Details</a></span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>      

<div class="col-lg-3 col-md-6">
    <div class="panel panel-black">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-check fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge">
                        <?php
                        // PHP code to get completed services
                        $sql = "SELECT COUNT(w_id) AS total FROM workorder WHERE w_complete = 'complete'";
                        $result = mysqli_query($con, $sql);
                        $values = mysqli_fetch_assoc($result);
                        $num_rows = $values['total'];
                        echo $num_rows;
                        ?>
                    </div>
                    <div>Completed Services!</div>
                </div>
            </div>
        </div>
        <a href="#">
            <div class="panel-footer">
                <span class="pull-left"><a href="../pages/completedorder.php">View Details</a></span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
            </div>
        </a>
    </div>
</div>

            <div class="col-lg-3 col-md-6">
                    <div class="panel panel-black">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                        <?php
                                        // PHP code to get total undamaged assets
                                        $sql = "SELECT COUNT(a_id) AS total FROM asset WHERE a_status = 'Undamaged'";
                                        $result = mysqli_query($con, $sql);
                                        $values = mysqli_fetch_assoc($result);
                                        $num_rows = $values['total'];
                                        echo $num_rows;
                                        ?>
                                    </div>
                                    <div>Total Assets!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left"><a href="../pages/asset.php">View Details</a></span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                </div>
           <!-- /.panel-chart -->
           <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Graph Report</h1>
            </div>

        </div> 
            <div>
                <div class="chart-container">
                        <canvas id="barChart"></canvas>
                        </div> 
                        <div class="chart-container">
                        <canvas id="lineChart"></canvas>
                    </div>                 
                </div>

                <?php

                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "cmms";

                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Fetch data from the database
                    $sql = "SELECT MONTH(w_created) AS month, COUNT(*) AS count
                            FROM workorder
                            GROUP BY MONTH(w_created)";
                    $result = $conn->query($sql);

                    // Initialize an array with all months
                    $allMonths = [
                        'January', 'February', 'March', 'April', 'May', 'June',
                        'July', 'August', 'September', 'October', 'November', 'December'
                    ];

                    // Initialize an empty array to store the results
                    $ordersData = [];

                    // Populate the array with counts for each month
                    while ($row = $result->fetch_assoc()) {
                        $month = date('F', strtotime('2022-' . $row['month'] . '-01'));
                        $count = $row['count'];
                        
                        // Only add months with non-zero counts
                        if ($count > 0) {
                            $ordersData[$month] = $count;
                        }
                    }

                    // Output the updated array
                    print_r($ordersData);

                    $conn->close();
       
                $assetsData = [
                  
                ];

                // charts
                $labels = array_keys($ordersData);
                $ordersValues = array_values($ordersData);
                $assetsValues = array_values($assetsData);

                // labes
                $labelsJSON = json_encode($labels);
                $ordersValuesJSON = json_encode($ordersValues);
                $assetsValuesJSON = json_encode($assetsValues);
                ?>
    
                <?php

                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "cmms";

                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Fetch data from the database
                    $sql = "SELECT MONTH(a_date) AS month, COUNT(*) AS count
                            FROM asset
                            GROUP BY MONTH(a_date)";
                    $result = $conn->query($sql);

                    // Initialize an array with all months
                    $allMonths = [
                        'January', 'February', 'March', 'April', 'May', 'June',
                        'July', 'August', 'September', 'October', 'November', 'December'
                    ];

                    // Initialize an empty array to store the results
                    $assetsData = [];

                    // Populate the array with counts for each month
                    while ($row = $result->fetch_assoc()) {
                        $month = date('F', strtotime('2022-' . $row['month'] . '-01'));
                        $count = $row['count'];
                        
                        // Only add months with non-zero counts
                        if ($count > 0) {
                            $assetsData[$month] = $count;
                        }
                    }

                    // Output the updated array
                    print_r($assetsData);

                    $conn->close();
       

                // charts
                $labels = array_keys($ordersData);
                $ordersValues = array_values($ordersData);
                $assetsValues = array_values($assetsData);

                // labes
                $labelsJSON = json_encode($labels);
                $ordersValuesJSON = json_encode($ordersValues);
                $assetsValuesJSON = json_encode($assetsValues);
                ?>
      </div>
   
<style>
    .discord-dark-theme {
        background-color: #408EFB;
        color: #fff;
    }

    .discord-dark-theme th {
        background-color: #0057d1;
    }

    .discord-dark-theme tbody tr:nth-child(even) {
        background-color: #217eff;
    }

    .discord-dark-theme tbody tr:hover {
        background-color: #006aff;
    }
</style>
<div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Active Services</h1>
            </div>
        </div>

<div class="row">
    <div class="col-lg-12">
        <div class="">
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover discord-dark-theme">
                        <thead>
                            <tr>
                                <th>Service Type</th>
                                <th>Staff Assigned</th>
                                <th>Date Due</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Include the connection
                            include "../includes/connect.inc.php";

                            $sql = 'SELECT * FROM workorder
                            INNER JOIN services ON workorder.ser_id = services.ser_id
                            INNER JOIN priority ON workorder.p_id = priority.p_id
                            INNER JOIN staff ON workorder.s_id = staff.s_id
                            INNER JOIN status ON workorder.st_id = status.st_id';

                            foreach ($conn->query($sql) as $row) {
                                if ($row["w_complete"] !== 'complete') {
                                ?>
                                <tr>
                                    <td><?php echo $row["ser_desc"]?></td>
                                    <td><?php echo $row["s_name"]?></td>
                                    <td><?php echo $row["w_due"]?></td>
                                    <td><?php echo $row["st_desc"]?></td>

                                    <?php include('../modals/workorder-details.modal.php'); ?>
                                </tr>
                                <?php
                            }}

                            // Close connection
                            $conn = null;
                            ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- .panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
</body>

                <script>
                  
                    var labels = <?php echo $labelsJSON; ?>;
                    var ordersValues = <?php echo $ordersValuesJSON; ?>;
                    var assetsValues = <?php echo $assetsValuesJSON; ?>;

                    // bar chart 
                    var barCtx = document.getElementById('barChart').getContext('2d');
                    var barChart = new Chart(barCtx, {
                        type: 'bar',
                        data: {
                            labels: labels,
                            datasets: [{
                                label: 'Total Orders per Month',
                                data: ordersValues,
                                backgroundColor: 'rgba(75, 192, 192, 0.2)', 
                                borderColor: 'rgba(75, 192, 192, 1)', 
                                borderWidth: 1
                            }]
                        },
                        options: {
                            responsive: true,
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });

                    // line chart 
                    var lineCtx = document.getElementById('lineChart').getContext('2d');
                    var lineChart = new Chart(lineCtx, {
                        type: 'line',
                        data: {
                            labels: labels,
                            datasets: [{
                                label: 'Total Assets per Month',
                                data: assetsValues,
                                backgroundColor: 'rgba(0, 0, 255, 0.2)', // More blue with an alpha of 0.2
                                borderColor: 'rgba(0, 0, 255, 1)',   
                                borderWidth: 1,
                                fill: true
                            }]
                        },
                        options: {
                            responsive: true,
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                </script>

<?php
    include("../templates/footer.php");
?>
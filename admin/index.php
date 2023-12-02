<?php
include "../process.php";
include "validation.php";

$date = date('Y-m-d');

// echo '<pre>';
// var_dump($date);
// echo '<pre>';

$sql = "SELECT * FROM tbl_records where DATE = '$date'";
$result = mysqli_query($conn, $sql);

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Queing System</title>
<link rel="icon" type="image/x-icon" href="../assets/image/favicon.ico">

    <link href="../assets/css/main.css" rel="stylesheet" />
    <link href="../assets/css/icons.css" rel="stylesheet" />
    <link href="../assets/css/basic.css" rel="stylesheet" />
    <link href="../assets/css/custom.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">Admin</a>
            </div>

            <div class="header-right">

                <!-- <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b></a> -->
                <!-- <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a> -->
                <a href="../logout.php" class="btn btn-danger" title="Logout">Logout</a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div style="text-align: center">
                            <img src="../assets/image/try.png" width="40%" height="40%"/>
                        </div>

                    </li>


                    <li>
                        <a class="active-menu" href=""><i class="fa fa-user "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#">Department Queuing Status<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="brgyclrec.php">Barangay ID</a>
                                <a href="resrec.php">Residency</a>
                                <a href="clrrec.php">Clearance</a>
                                <a href="indrec.php">Indigency</a>
                                <a href="pcrec.php">Business Clearance</a>
                                <a href="cedrec.php">Building Clearance</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="../departments/frontdesk">Front Desk</a>
                    </li>
                    <li>
                        <a href="records.php">Records</a>

                    </li>
                    <li>
                        <a href="../departments/frontdesk/active-queue.php">Active Queue</a>

                    </li>

                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner" class="bg-image">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">DASHBOARD</h1>
                    </div>
                </div>
                <!-- /. ROW  -->
                <!-- <div class="row" >
                    <div class="col-md-4">
                        <div class="main-box mb-red">
                            <a href="#">
                                <i class="fa fa-bolt"> Current Number in Queues</i>
                                <h5>5</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="main-box mb-dull">
                            <a href="#">
                                <i class="fa fa-plug"> Number of Requested Documents For Today</i>
                                <h5>40</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="main-box mb-pink">
                            <a href="#">
                                <i class="fa fa-user"> Cut off For Today</i>
                                <h5>2 over 30</h5>
                            </a>
                        </div>
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-md-12">

                        <div class="panel panel-default">
                            <div class="panel-heading" style="text-align: center;">
                                Records for Today
                            </div>
                            <div class="panel-heading" style="text-align: end;">
                                <a href="download.php" class="btn btn-warning  btn-wd">Export Record</a>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Department</th>
                                                <th>Time</th>
                                                <th>Full Name</th>
                                                <!-- <th>Username</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                ?>
                                            <tr>
                                                <td><?php echo $row['Department']; ?></td>
                                                <td><?php echo $row['TIME']; ?></td>
                                                <td><?php echo $row['fullname']; ?></td>
                                            </tr>
		                                <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- End  Hover Rows  -->
                    </div>
                </div>


            </div>
        </div>
    </div>

    <!-- <div id="footer-sec">
        <a href="" target="_blank"></a>
    </div> -->
    <!-- JQUERY SCRIPTS -->
    <script src="../assets/js/jquery-1.10.2.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/jquery.metisMenu.js"></script>
    <script src="../assets/js/custom.js"></script>



</body>
</html>

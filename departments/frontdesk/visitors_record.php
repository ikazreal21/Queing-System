<?php
include "../../process.php";
include "../../admin/validation.php";    
include "../../function.php";    


// echo '<pre>';
// var_dump($date);
// echo '<pre>';
$search1 = $_GET['first_name'] ?? '';

if ($search1) {
    $sql = "SELECT * FROM tbl_userinformation where first_name like '%$search1%'";
    $result = mysqli_query($conn, $sql);
    //     echo '<pre>';
    // var_dump($result);
    // echo '<pre>';
} else {
    $sql = "SELECT * FROM tbl_userinformation";
    $result = mysqli_query($conn, $sql);
}

			


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>

    <link href="../../assets/css/main.css" rel="stylesheet" />
    <link href="../../assets/css/icons.css" rel="stylesheet" />
    <link href="../../assets/css/basic.css" rel="stylesheet" />
    <link href="../../assets/css/custom.css" rel="stylesheet" />
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
                <a class="navbar-brand" href="">Front Desk</a>
            </div>

            <div class="header-right">

                <!-- <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b></a> -->
                <!-- <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a> -->
                <a href="../../logout.php" class="btn btn-danger" title="Logout">Logout</a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div style="text-align: center">
                            <img src="../../assets/image/try.png" width="40%" height="40%"/>
                        </div>

                    </li>


                    <li>
                        <a class="active-menu" href="../../admin/"><i class="fa fa-user "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#">Department Queuing Status<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="../../admin/brgyclrec.php">Barangay ID</a>
                                <a href="../../admin/resrec.php">Residency</a>
                                <a href="../../admin/clrrec.php">Clearance</a>
                                <a href="../../admin/indrec.php">Indigency</a>
                                <a href="../../admin/pcrec.php">Police Clearance</a>
                                <a href="../../admin/cedrec.php">Cedula</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Front Desk<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="index.php">Queue Form</a>
                                <a href="visitors_record.php">Visitors Record</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="../../admin/records.php">Records</a>
                        
                    </li>
                    <li>
                        <a href="active-queue.php">Active Queue</a>
                        
                    </li>
                    
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" class="bg-image">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Visitor's Record</h1>
                    </div>
                    <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <form action=""  method="get">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <input class="form-control" name="first_name" placeholder="First Name" type="text">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <button type="submit" class="btn btn-info">Search Visitor</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php while($row = mysqli_fetch_assoc($result)) { ?>
                                        <tr>
                                            <td><?php echo $row['queue_id']; ?></td>
                                            <td><?php echo $row['first_name']; ?></td>
                                            <td><?php echo $row['last_name']; ?></td>
                                            <td>
                                                <a href="view_visitor.php?id=<?php echo $row['queue_id']; ?>" class="btn btn-success btn-wd">View Visitor</a>
                                            </td>
                                        </tr>
		                            <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div id="footer-sec">
        <a href="" target="_blank"></a>
    </div> -->
    <!-- JQUERY SCRIPTS -->
    <script src="../../assets/js/jquery-1.10.2.js"></script>
    <script src="../../assets/js/main.js"></script>
    <script src="../../assets/js/jquery.metisMenu.js"></script>
    <script src="../../assets/js/custom.js"></script>
    


</body>
</html>

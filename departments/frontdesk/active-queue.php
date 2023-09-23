<?php
include "../../process.php";
include "../../admin/validation.php";    


$date = date('Y-m-d');

// echo '<pre>';
// var_dump($date);
// echo '<pre>';
$brgy_id_arr = [];
$cedula_arr = [];
$brgy_clear_arr = [];
$indigency_arr = [];
$police_clear_arr = [];
$residency_arr = [];


$sql = "SELECT * FROM tbl_brgyid where DATE = '$date'";
$brgy_id = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($brgy_id)) {
    $brgy_id_arr[] = $row;
    // echo '<pre>';
    // var_dump($brgy_id_arr);
    // echo '<pre>';
}
if (count($brgy_id_arr) != 0) {
    $brgy_id_arr2 = $brgy_id_arr;
    array_shift($brgy_id_arr2);
}

$sql = "SELECT * FROM tbl_cedula where DATE = '$date'";
$cedula = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($cedula)) {
    $cedula_arr[] = $row;
    // echo '<pre>';
    // var_dump($cedula_arr);
    // echo '<pre>';
}
if (count($cedula_arr) != 0) {
    $cedula_arr2 = $cedula_arr;
    array_shift($cedula_arr2);
};

$sql = "SELECT * FROM tbl_clearance where DATE = '$date'";
$brgy_clear = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($brgy_clear)) {
    $brgy_clear_arr[] = $row;
    // echo '<pre>';
    // var_dump($cedula_arr);
    // echo '<pre>';
}
if (count($brgy_clear_arr) != 0) {
    $brgy_clear_arr2 = $brgy_clear_arr;
    array_shift($brgy_clear_arr2);
};

$sql = "SELECT * FROM tbl_indigency where DATE = '$date'";
$indigency = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($indigency)) {
    $indigency_arr[] = $row;
    // echo '<pre>';
    // var_dump($cedula_arr);
    // echo '<pre>';
}
if (count($indigency_arr) != 0) {
    $indigency_arr2 = $indigency_arr;
    array_shift($indigency_arr2);
};

$sql = "SELECT * FROM tbl_policeclr where DATE = '$date'";
$police_clear = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($police_clear)) {
    $police_clear_arr[] = $row;
    // echo '<pre>';
    // var_dump($cedula_arr);
    // echo '<pre>';
}
if (count($police_clear_arr) != 0) {
    $police_clear_arr2 = $police_clear_arr;
    array_shift($police_clear_arr2);
};


$sql = "SELECT * FROM tbl_residency where DATE = '$date'";
$residency = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($residency)) {
    $residency_arr[] = $row;
    // echo '<pre>';
    // var_dump($cedula_arr);
    // echo '<pre>';
}
if (count($residency_arr) != 0) {
    $residency_arr2 = $residency_arr;
    array_shift($residency_arr2);
};

header("Refresh:2");


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
            <!-- <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">Admin</a>
            </div> -->

            <div class="header-right">

                <!-- <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b></a> -->
                <!-- <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a> -->
                <a href="../../admin/" class="btn btn-danger" title="Logout">Back</a>

            </div>
        </nav>
        <!-- <nav class="navbar-default navbar-side" role="navigation">
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
                                <a href="../../departments/brgy_id/">Barangay ID</a>
                                <a href="../../departments/residency/">Residency</a>
                                <a href="../../departments/clearance/">Clearance</a>
                                <a href="../../departments/indigency/">Indigency</a>
                                <a href="../../departments/police_clearance/">Police Clearance</a>
                                <a href="../../departments/cedula/">Cedula</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="../../departments/frontdesk">FrontDesk</a>
                        <a href="#">FrontDesk<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="../../departments/brgy_id/">Barangay ID</a>
                                <a href="../../departments/residency/">Residency</a>
                                <a href="../../departments/clearance/">Clearance</a>
                                <a href="../../departments/indigency/">Indigency</a>
                                <a href="../../departments/police_clearance/">Police Clearance</a>
                                <a href="../../departments/cedula/">Cedula</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="records.php">Records</a>
                        
                    </li>
                    
                </ul>

            </div>

        </nav> -->
        <!-- <div id="page-wrapper">
        </div> -->
        <div class="col-md-2" style="padding-top: 1rem" >
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="text-center">Barangay ID</h2>
                </div>
                <div>
                    <h2 class="text-center"> Now Serving</h2>
                    <?php if (count($brgy_id_arr) != 0): ?>
                    <h2 class="text-center"> <mark style='color:blue;'><u> <?php echo $brgy_id_arr[0]['User_id']; ?>-<?php echo $brgy_id_arr[0]['user_first_name']; ?></u></mark> </h2>
                    <?php endif; ?>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            </thead>
                            <tbody>
                    <?php if (count($brgy_id_arr) != 0): ?>
                            <?php foreach ($brgy_id_arr2 as $i => $item): ?>
                                <tr class="text-center">
                                    <td>
                                        <h3>
                                            <b>
                                            <?php echo $i; ?>.) <?php echo $item['User_id']; ?> - <?php echo $item['user_first_name']; ?>
                                            </b>
                                        </h3>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                    <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2" style="padding-top: 1rem" >
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="text-center">Cedula</h2>
                </div>
                <div>
                    <h2 class="text-center">Now Serving</h2>
                    <?php if (count($cedula_arr) != 0): ?>
                    <h2 class="text-center"> <mark style='color:blue;'> <u> <?php echo $cedula_arr[0]['User_id']; ?>-<?php echo $cedula_arr[0]['user_first_name']; ?></u></mark> </h2>
                    <?php endif; ?>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            </thead>
                            <tbody>
                    <?php if (count($cedula_arr) != 0): ?>
                            <?php foreach ($cedula_arr2 as $i => $item): ?>
                                <tr class="text-center">
                                    <td>
                                        <h3>
                                            <b>
                                            <?php echo $i; ?>.) <?php echo $item['User_id']; ?> - <?php echo $item['user_first_name']; ?>
                                            </b>
                                        </h3>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                    <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2" style="padding-top: 1rem" >
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="text-center">Barangay Clearance</h2>
                </div>
                <div>
                    <h2 class="text-center">Now Serving</h2>
                    <?php if (count($brgy_clear_arr) != 0): ?>
                    <h2 class="text-center"> <mark style='color:blue;'> <u> <?php echo $brgy_clear_arr[0]['User_id']; ?>-<?php echo $brgy_clear_arr[0]['user_first_name']; ?> </u></mark> </h2>
                    <?php endif; ?>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            </thead>
                            <tbody>
                    <?php if (count($brgy_clear_arr) != 0): ?>
                            <?php foreach ($brgy_clear_arr2 as $i => $item): ?>
                                <tr class="text-center">
                                    <td>
                                        <h3>
                                            <b>
                                            <?php echo $i; ?>.) <?php echo $item['User_id']; ?> - <?php echo $item['user_first_name']; ?>
                                            </b>
                                        </h3>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                    <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2" style="padding-top: 1rem" >
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="text-center">Indigency</h2>
                </div>
                <div>
                    <h2 class="text-center">Now Serving</h2>
                    <?php if (count($indigency_arr) != 0): ?>
                    <h2 class="text-center"> <mark style='color:blue;'><u>  <?php echo $indigency_arr[0]['User_id']; ?>-<?php echo $indigency_arr[0]['user_first_name']; ?> </u></mark> </h2>
                    <?php endif; ?>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            </thead>
                            <tbody>
                    <?php if (count($indigency_arr) != 0): ?>
                            <?php foreach ($indigency_arr2 as $i => $item): ?>
                                <tr class="text-center">
                                    <td>
                                        <h3>
                                            <b>
                                            <?php echo $i; ?>.) <?php echo $item['User_id']; ?> - <?php echo $item['user_first_name']; ?>
                                            </b>
                                        </h3>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                    <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2" style="padding-top: 1rem" >
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="text-center">Police Clearance</h2>
                </div>
                <div>
                    <h2 class="text-center">Now Serving</h2>
                    <?php if (count($police_clear_arr) != 0): ?>
                        <h2 class="text-center"> <mark style='color:blue;'> <u> <?php echo $police_clear_arr[0]['User_id']; ?>-<?php echo $police_clear_arr[0]['user_first_name']; ?> </u></mark> </h2>
                    <?php endif; ?>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            </thead>
                            <tbody>
                            <?php if (count($police_clear_arr) != 0): ?>
                                <?php foreach ($police_clear_arr2 as $i => $item): ?>
                                    <tr class="text-center">
                                        <td>
                                            <h3>
                                                <b>
                                                <?php echo $i; ?>.) <?php echo $item['User_id']; ?> - <?php echo $item['user_first_name']; ?>
                                                </b>
                                            </h3>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2" style="padding-top: 1rem" >
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="text-center">Residency</h2>
                </div>
                <div>
                    <h2 class="text-center">Now Serving</h2>
                    <?php if (count($residency_arr) != 0): ?>
                    <h2 class="text-center"> <mark style='color:blue;'> <?php echo $residency_arr[0]['User_id']; ?>-<?php echo $residency_arr[0]['user_first_name']; ?></mark> </h2>
                    <?php endif; ?>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            </thead>
                            <tbody>
                            <?php if (count($residency_arr) != 0): ?>
                                <?php foreach ($residency_arr2 as $i => $item): ?>
                                    <tr class="text-center">
                                        <td>
                                            <h3>
                                                <b>
                                                <?php echo $i; ?>.) <?php echo $item['User_id']; ?> - <?php echo $item['user_first_name']; ?>
                                                </b>
                                            </h3>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            </tbody>
                        </table>
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

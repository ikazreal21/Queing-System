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
$brgy_id_arr2 = [];
$cedula_arr2 = [];
$brgy_clear_arr2 = [];
$indigency_arr2 = [];
$police_clear_arr2 = [];
$residency_arr2 = [];

$sql = "SELECT * FROM tbl_brgyid brgy, docu_table dc where DATE = '$date' and brgy.User_id = dc.user_id";
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

$sql = "SELECT * FROM tbl_cedula brgy, docu_table dc where DATE = '$date' and brgy.User_id = dc.user_id";
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
}
;

$sql = "SELECT * FROM tbl_clearance brgy, docu_table dc where DATE = '$date' and brgy.User_id = dc.user_id";
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
}
;

$sql = "SELECT * FROM tbl_indigency brgy, docu_table dc where DATE = '$date' and brgy.User_id = dc.user_id";
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
}
;

$sql = "SELECT * FROM tbl_policeclr brgy, docu_table dc where DATE = '$date' and brgy.User_id = dc.user_id";
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
}
;

$sql = "SELECT * FROM tbl_residency brgy, docu_table dc where DATE = '$date' and brgy.User_id = dc.user_id";
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
}
;

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
                                <a href="../../departments/police_clearance/">Business Clearance</a>
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
                                <a href="../../departments/police_clearance/">Business Clearance</a>
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
                    <h1 class="text-center"> <mark style='color:blue;'> <u> <i>00-<?php echo $brgy_id_arr[0]['docu_table_id']; ?></i>|
                    <?php echo $brgy_id_arr[0]['user_first_name']; ?></u></mark></h1>
                    <?php endif;?>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            </thead>
                            <tbody>
                    <?php if (count($brgy_id_arr2) >= 5): ?>
                                <tr class="text-center">
                                    <td>
                                        <h3>
                                            <b>
                                                1.) <i>00-<?php echo $brgy_id_arr2[0]['docu_table_id']; ?> </i> |<?php echo $brgy_id_arr2[0]['user_first_name']; ?>
                                            </b>
                                        </h3>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>
                                        <h3>
                                            <b>
                                                2.) <i>00-<?php echo $brgy_id_arr2[1]['docu_table_id']; ?> </i> |<?php echo $brgy_id_arr2[0]['user_first_name']; ?>
                                            </b>
                                        </h3>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>
                                        <h3>
                                            <b>
                                                3.) <i>00-<?php echo $brgy_id_arr2[2]['docu_table_id']; ?> </i> |<?php echo $brgy_id_arr2[0]['user_first_name']; ?>
                                            </b>
                                        </h3>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>
                                        <h3>
                                            <b>
                                                4.) <i>00-<?php echo $brgy_id_arr2[3]['docu_table_id']; ?> </i> |<?php echo $brgy_id_arr2[0]['user_first_name']; ?>
                                            </b>
                                        </h3>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>
                                        <h3>
                                            <b>
                                                5.) <i>00-<?php echo $brgy_id_arr2[4]['docu_table_id']; ?> </i> |<?php echo $brgy_id_arr2[0]['user_first_name']; ?>
                                            </b>
                                        </h3>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>
                                        <h3>
                                            <b>
                                               .....................
                                            </b>
                                        </h3>
                                    </td>
                                </tr>
                    <?php elseif (count($brgy_id_arr) != 0): ?>
                        <?php foreach ($brgy_id_arr2 as $i => $item): ?>
                                <tr class="text-center">
                                    <td>
                                        <h3>
                                            <b>
                                            <?php echo $i + 1; ?>.) <i>00-<?php echo $item['docu_table_id']; ?> </i> |<?php echo $item['user_first_name']; ?>
                                            </b>
                                        </h3>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                    <?php else: ?>
                        <tr class="text-center">
                            <td>
                                <h3>
                                    <b>
                                    No Queue in Line
                                    </b>
                                </h3>
                            </td>
                        </tr>
                    <?php endif;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2" style="padding-top: 1rem" >
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="text-center">Building Clearance</h2>
                </div>
                <div>
                    <h2 class="text-center">Now Serving</h2>
                    <?php if (count($cedula_arr) != 0): ?>
                    <h1 class="text-center"> <mark style='color:blue;'> <u> <i>00-<?php echo $cedula_arr[0]['docu_table_id']; ?></i>|
                    <?php echo $cedula_arr[0]['user_first_name']; ?></u></mark></h1>
                    <?php endif;?>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                    <table class="table table-hover">
                            <thead>
                            </thead>
                            <tbody>
                    <?php if (count($cedula_arr2) >= 5): ?>
                                <tr class="text-center">
                                    <td>
                                        <h3>
                                            <b>
                                                1.) <i>00-<?php echo $cedula_arr2[0]['docu_table_id']; ?> </i> |<?php echo $cedula_arr2[0]['user_first_name']; ?>
                                            </b>
                                        </h3>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>
                                        <h3>
                                            <b>
                                                2.) <i>00-<?php echo $cedula_arr2[1]['docu_table_id']; ?> </i> |<?php echo $cedula_arr2[1]['user_first_name']; ?>
                                            </b>
                                        </h3>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>
                                        <h3>
                                            <b>
                                                3.) <i>00-<?php echo $cedula_arr2[2]['docu_table_id']; ?> </i> |<?php echo $cedula_arr2[2]['user_first_name']; ?>
                                            </b>
                                        </h3>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>
                                        <h3>
                                            <b>
                                                4.) <i>00-<?php echo $cedula_arr2[3]['docu_table_id']; ?> </i> |<?php echo $cedula_arr2[3]['user_first_name']; ?>
                                            </b>
                                        </h3>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>
                                        <h3>
                                            <b>
                                                5.) <i>00-<?php echo $cedula_arr2[4]['docu_table_id']; ?> </i> |<?php echo $cedula_arr2[4]['user_first_name']; ?>
                                            </b>
                                        </h3>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>
                                        <h3>
                                            <b>
                                               .....................
                                            </b>
                                        </h3>
                                    </td>
                                </tr>
                    <?php elseif (count($cedula_arr) != 0): ?>
                        <?php foreach ($cedula_arr2 as $i => $item): ?>
                                <tr class="text-center">
                                    <td>
                                        <h3>
                                            <b>
                                            <?php echo $i + 1; ?>.) <i>00-<?php echo $item['docu_table_id']; ?> </i> |<?php echo $item['user_first_name']; ?>
                                            </b>
                                        </h3>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                    <?php else: ?>
                        <tr class="text-center">
                            <td>
                                <h3>
                                    <b>
                                    No Queue in Line
                                    </b>
                                </h3>
                            </td>
                        </tr>
                    <?php endif;?>
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
                    <h1 class="text-center"> <mark style='color:blue;'> <u> <i>00-<?php echo $brgy_clear_arr[0]['docu_table_id']; ?></i>|
                    <?php echo $brgy_clear_arr[0]['user_first_name']; ?></u></mark></h1>
                    <?php endif;?>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                    <table class="table table-hover">
                            <thead>
                            </thead>
                            <tbody>
                    <?php if (count($brgy_clear_arr2) >= 5): ?>
                                <tr class="text-center">
                                    <td>
                                        <h3>
                                            <b>
                                                1.) <i>00-<?php echo $brgy_clear_arr2[0]['docu_table_id']; ?> </i> |<?php echo $brgy_clear_arr2[0]['user_first_name']; ?>
                                            </b>
                                        </h3>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>
                                        <h3>
                                            <b>
                                                2.) <i>00-<?php echo $brgy_clear_arr2[1]['docu_table_id']; ?> </i> |<?php echo $brgy_clear_arr2[1]['user_first_name']; ?>
                                            </b>
                                        </h3>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>
                                        <h3>
                                            <b>
                                                3.) <i>00-<?php echo $brgy_clear_arr2[2]['docu_table_id']; ?> </i> |<?php echo $brgy_clear_arr2[2]['user_first_name']; ?>
                                            </b>
                                        </h3>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>
                                        <h3>
                                            <b>
                                                4.) <i>00-<?php echo $brgy_clear_arr2[3]['docu_table_id']; ?> </i> |<?php echo $brgy_clear_arr2[3]['user_first_name']; ?>
                                            </b>
                                        </h3>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>
                                        <h3>
                                            <b>
                                                5.) <i>00-<?php echo $brgy_clear_arr2[4]['docu_table_id']; ?> </i> |<?php echo $brgy_clear_arr2[4]['user_first_name']; ?>
                                            </b>
                                        </h3>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>
                                        <h3>
                                            <b>
                                               .....................
                                            </b>
                                        </h3>
                                    </td>
                                </tr>
                    <?php elseif (count($brgy_clear_arr) != 0): ?>
                        <?php foreach ($brgy_clear_arr2 as $i => $item): ?>
                                <tr class="text-center">
                                    <td>
                                        <h3>
                                            <b>
                                            <?php echo $i + 1; ?>.) <i>00-<?php echo $item['docu_table_id']; ?> </i> |<?php echo $item['user_first_name']; ?>
                                            </b>
                                        </h3>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                    <?php else: ?>
                        <tr class="text-center">
                            <td>
                                <h3>
                                    <b>
                                    No Queue in Line
                                    </b>
                                </h3>
                            </td>
                        </tr>
                    <?php endif;?>
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
                    <h1 class="text-center"> <mark style='color:blue;'> <u> <i>00-<?php echo $indigency_arr[0]['docu_table_id']; ?></i>|
                    <?php echo $indigency_arr[0]['user_first_name']; ?></u></mark></h1>
                    <?php endif;?>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                    <table class="table table-hover">
                            <thead>
                            </thead>
                            <tbody>
                    <?php if (count($indigency_arr2) >= 5): ?>
                                <tr class="text-center">
                                    <td>
                                        <h3>
                                            <b>
                                                1.) <i>00-<?php echo $indigency_arr2[0]['docu_table_id']; ?> </i> |<?php echo $indigency_arr2[0]['user_first_name']; ?>
                                            </b>
                                        </h3>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>
                                        <h3>
                                            <b>
                                                2.) <i>00-<?php echo $indigency_arr2[1]['docu_table_id']; ?> </i> |<?php echo $indigency_arr2[1]['user_first_name']; ?>
                                            </b>
                                        </h3>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>
                                        <h3>
                                            <b>
                                                3.) <i>00-<?php echo $indigency_arr2[2]['docu_table_id']; ?> </i> |<?php echo $indigency_arr2[2]['user_first_name']; ?>
                                            </b>
                                        </h3>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>
                                        <h3>
                                            <b>
                                                4.) <i>00-<?php echo $indigency_arr2[3]['docu_table_id']; ?> </i> |<?php echo $indigency_arr2[3]['user_first_name']; ?>
                                            </b>
                                        </h3>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>
                                        <h3>
                                            <b>
                                                5.) <i>00-<?php echo $indigency_arr2[4]['docu_table_id']; ?> </i> |<?php echo $indigency_arr2[4]['user_first_name']; ?>
                                            </b>
                                        </h3>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>
                                        <h3>
                                            <b>
                                               .....................
                                            </b>
                                        </h3>
                                    </td>
                                </tr>
                    <?php elseif (count($indigency_arr) != 0): ?>
                        <?php foreach ($indigency_arr2 as $i => $item): ?>
                                <tr class="text-center">
                                    <td>
                                        <h3>
                                            <b>
                                            <?php echo $i + 1; ?>.) <i>00-<?php echo $item['docu_table_id']; ?> </i> |<?php echo $item['user_first_name']; ?>
                                            </b>
                                        </h3>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                    <?php else: ?>
                        <tr class="text-center">
                            <td>
                                <h3>
                                    <b>
                                    No Queue in Line
                                    </b>
                                </h3>
                            </td>
                        </tr>
                    <?php endif;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2" style="padding-top: 1rem" >
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="text-center">Business Clearance</h2>
                </div>
                <div>
                    <h2 class="text-center">Now Serving</h2>
                    <?php if (count($police_clear_arr) != 0): ?>
                        <h1 class="text-center"> <mark style='color:blue;'> <u> <i>00-<?php echo $police_clear_arr[0]['docu_table_id']; ?></i>|
                        <?php echo $police_clear_arr[0]['user_first_name']; ?></u></mark></h1>
                    <?php endif;?>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                    <table class="table table-hover">
                            <thead>
                            </thead>
                            <tbody>
                    <?php if (count($police_clear_arr2) >= 5): ?>
                                <tr class="text-center">
                                    <td>
                                        <h3>
                                            <b>
                                                1.) <i>00-<?php echo $police_clear_arr2[0]['docu_table_id']; ?> </i> |<?php echo $police_clear_arr2[0]['user_first_name']; ?>
                                            </b>
                                        </h3>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>
                                        <h3>
                                            <b>
                                                2.) <i>00-<?php echo $police_clear_arr2[1]['docu_table_id']; ?> </i> |<?php echo $police_clear_arr2[1]['user_first_name']; ?>
                                            </b>
                                        </h3>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>
                                        <h3>
                                            <b>
                                                3.) <i>00-<?php echo $police_clear_arr2[2]['docu_table_id']; ?> </i> |<?php echo $police_clear_arr2[2]['user_first_name']; ?>
                                            </b>
                                        </h3>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>
                                        <h3>
                                            <b>
                                                4.) <i>00-<?php echo $police_clear_arr2[3]['docu_table_id']; ?> </i> |<?php echo $police_clear_arr2[3]['user_first_name']; ?>
                                            </b>
                                        </h3>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>
                                        <h3>
                                            <b>
                                                5.) <i>00-<?php echo $police_clear_arr2[4]['docu_table_id']; ?> </i> |<?php echo $police_clear_arr2[4]['user_first_name']; ?>
                                            </b>
                                        </h3>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>
                                        <h3>
                                            <b>
                                               .....................
                                            </b>
                                        </h3>
                                    </td>
                                </tr>
                    <?php elseif (count($police_clear_arr) != 0): ?>
                        <?php foreach ($police_clear_arr2 as $i => $item): ?>
                                <tr class="text-center">
                                    <td>
                                        <h3>
                                            <b>
                                            <?php echo $i + 1; ?>.) <i>00-<?php echo $item['docu_table_id']; ?> </i> |<?php echo $item['user_first_name']; ?>
                                            </b>
                                        </h3>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                    <?php else: ?>
                        <tr class="text-center">
                            <td>
                                <h3>
                                    <b>
                                    No Queue in Line
                                    </b>
                                </h3>
                            </td>
                        </tr>
                    <?php endif;?>
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
                        <h1 class="text-center"> <mark style='color:blue;'> <u> <i>00-<?php echo $residency_arr[0]['docu_table_id']; ?></i>|
                        <?php echo $residency_arr[0]['user_first_name']; ?></u></mark></h1>
                    <?php endif;?>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                    <table class="table table-hover">
                            <thead>
                            </thead>
                            <tbody>
                    <?php if (count($residency_arr2) >= 5): ?>
                                <tr class="text-center">
                                    <td>
                                        <h3>
                                            <b>
                                                1.) <i>00-<?php echo $residency_arr2[0]['docu_table_id']; ?> </i> |<?php echo $residency_arr2[0]['user_first_name']; ?>
                                            </b>
                                        </h3>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>
                                        <h3>
                                            <b>
                                                2.) <i>00-<?php echo $residency_arr2[1]['docu_table_id']; ?> </i> |<?php echo $residency_arr2[1]['user_first_name']; ?>
                                            </b>
                                        </h3>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>
                                        <h3>
                                            <b>
                                                3.) <i>00-<?php echo $residency_arr2[2]['docu_table_id']; ?> </i> |<?php echo $residency_arr2[2]['user_first_name']; ?>
                                            </b>
                                        </h3>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>
                                        <h3>
                                            <b>
                                                4.) <i>00-<?php echo $residency_arr2[3]['docu_table_id']; ?> </i> |<?php echo $residency_arr2[3]['user_first_name']; ?>
                                            </b>
                                        </h3>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>
                                        <h3>
                                            <b>
                                                5.) <i>00-<?php echo $residency_arr2[4]['docu_table_id']; ?> </i> |<?php echo $residency_arr2[4]['user_first_name']; ?>
                                            </b>
                                        </h3>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>
                                        <h3>
                                            <b>
                                               .....................
                                            </b>
                                        </h3>
                                    </td>
                                </tr>
                    <?php elseif (count($residency_arr) != 0): ?>
                        <?php foreach ($residency_arr2 as $i => $item): ?>
                                <tr class="text-center">
                                    <td>
                                        <h3>
                                            <b>
                                            <?php echo $i + 1; ?>.) <i>00-<?php echo $item['docu_table_id']; ?> </i> |<?php echo $item['user_first_name']; ?>
                                            </b>
                                        </h3>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                    <?php else: ?>
                        <tr class="text-center">
                            <td>
                                <h3>
                                    <b>
                                    No Queue in Line
                                    </b>
                                </h3>
                            </td>
                        </tr>
                    <?php endif;?>
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

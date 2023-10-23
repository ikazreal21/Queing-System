<?php
include "process.php";
// include "admin/validation.php";
// include "function.php";

$id = $_GET['id'] ?? '';

$date = date('Y-m-d');
$time = date('h:i');

$position = '';
$document = '';
$brgy_id_arr = [];
$cedula_arr = [];
$brgy_clear_arr = [];
$indigency_arr = [];
$police_clear_arr = [];
$residency_arr = [];
$docu_table2 = [];

$sql = "SELECT * FROM docu_table where user_id = '$id'";
$docu_table = mysqli_query($conn, $sql);
// $docu_table2 = $docu_table->fetch_array();

while ($row = mysqli_fetch_assoc($docu_table)) {
    $docu_table2[] = $row;
}

//    echo '<pre>';
//     var_dump($docu_table2);
//     echo '<pre>';

if ($docu_table->num_rows != 0) {

    if ($docu_table2[0]['brgy_id']) {
        if ($docu_table2[0]['cedula']) {
            $sql = "SELECT * FROM tbl_cedula brgy, docu_table dc where DATE = '$date' and brgy.User_id = dc.user_id";
            $cedula = mysqli_query($conn, $sql);
        
            while ($row = mysqli_fetch_assoc($cedula)) {
                $cedula_arr[] = $row['User_id'];
        
            }
        
            if ($cedula->num_rows != 0) {
                $position = intval(array_search($id, $cedula_arr));
                $document = 'Cedula';
        
            }
        } else {
            $sql = "SELECT * FROM tbl_brgyid brgy, docu_table dc where DATE = '$date' and brgy.User_id = dc.user_id";
            $brgy_id = mysqli_query($conn, $sql);
        
            while ($row = mysqli_fetch_assoc($brgy_id)) {
                $brgy_id_arr[] = $row['User_id'];
        
            }
        
            if ($brgy_id->num_rows != 0) {
                $position = array_search($id, $brgy_id_arr);
                $document = 'Barangay ID';
        
            }        
        }
    } elseif ($docu_table2[0]['brgy_clearance']) {
        if ($docu_table2[0]['brgy_id']) {
            $sql = "SELECT * FROM tbl_cedula brgy, docu_table dc where DATE = '$date' and brgy.User_id = dc.user_id";
            $cedula = mysqli_query($conn, $sql);
        
            while ($row = mysqli_fetch_assoc($cedula)) {
                $cedula_arr[] = $row['User_id'];
        
            }
        
            if ($cedula->num_rows != 0) {
                $position = intval(array_search($id, $cedula_arr));
                $document = 'Cedula';
        
            }
        } else {
            $sql = "SELECT * FROM tbl_clearance brgy, docu_table dc where DATE = '$date' and brgy.User_id = dc.user_id";
            $brgy_clear = mysqli_query($conn, $sql);
        
            while ($row = mysqli_fetch_assoc($brgy_clear)) {
                $brgy_clear_arr[] = $row['User_id'];
        
            }
        
            if ($brgy_clear->num_rows != 0) {
                $position = array_search($id, $brgy_clear_arr);
                $document = 'Barangay Clearance';
        
            }
        }
    } elseif ($docu_table2[0]['cedula']) {
        $sql = "SELECT * FROM tbl_cedula brgy, docu_table dc where DATE = '$date' and brgy.User_id = dc.user_id";
        $cedula = mysqli_query($conn, $sql);
    
        while ($row = mysqli_fetch_assoc($cedula)) {
            $cedula_arr[] = $row['User_id'];
    
        }
    
        if ($cedula->num_rows != 0) {
            $position = intval(array_search($id, $cedula_arr));
            $document = 'Cedula';
    
        }
    } elseif ($docu_table2[0]['recidency']) {
        $sql = "SELECT * FROM tbl_residency brgy, docu_table dc where DATE = '$date' and brgy.User_id = dc.user_id";
        $residency = mysqli_query($conn, $sql);
    
        while ($row = mysqli_fetch_assoc($residency)) {
            $residency_arr[] = $row['User_id'];
    
        }
    
        if ($residency->num_rows != 0) {
            $position = array_search($id, $residency_arr);
            $document = 'Residency';
    
        }
    } elseif ($docu_table2[0]['indigency']) {
        $sql = "SELECT * FROM tbl_indigency brgy, docu_table dc where DATE = '$date' and brgy.User_id = dc.user_id";
        $indigency = mysqli_query($conn, $sql);
    
        while ($row = mysqli_fetch_assoc($indigency)) {
            $indigency_arr[] = $row['User_id'];
    
        }
            if ($indigency->num_rows != 0) {
            $position = array_search($id, $indigency_arr);
            $document = 'Indigency';

        }
    } elseif ($docu_table2[0]['police_clearance']) {
        $sql = "SELECT * FROM tbl_policeclr brgy, docu_table dc where DATE = '$date' and brgy.User_id = dc.user_id";
        $police_clear = mysqli_query($conn, $sql);
    
        while ($row = mysqli_fetch_assoc($police_clear)) {
            $police_clear_arr[] = $row['User_id'];
    
        }
    
        if ($police_clear->num_rows != 0) {
            $position = array_search($id, $police_clear_arr);
            $document = 'Business Clearance';
    
        }
    }
    // $sql = "SELECT * FROM tbl_brgyid brgy, docu_table dc where DATE = '$date' and brgy.User_id = dc.user_id";
    // $brgy_id = mysqli_query($conn, $sql);

    // while ($row = mysqli_fetch_assoc($brgy_id)) {
    //     $brgy_id_arr[] = $row['User_id'];

    // }

    // if ($brgy_id->num_rows != 0) {
    //     $position = array_search($id, $brgy_id_arr);
    //     $document = 'Barangay ID';

    // }

    // echo '<pre>';
    // var_dump($document);
    // echo '<pre>';

    // $sql = "SELECT * FROM tbl_cedula brgy, docu_table dc where DATE = '$date' and brgy.User_id = dc.user_id";
    // $cedula = mysqli_query($conn, $sql);

    // while ($row = mysqli_fetch_assoc($cedula)) {
    //     $cedula_arr[] = $row['User_id'];

    // }

    // if ($cedula->num_rows != 0) {
    //     $position = intval(array_search($id, $cedula_arr));
    //     $document = 'Cedula';

    // }

    // echo '<pre>';
    // var_dump($position);
    // echo '<pre>';

    // $sql = "SELECT * FROM tbl_clearance brgy, docu_table dc where DATE = '$date' and brgy.User_id = dc.user_id";
    // $brgy_clear = mysqli_query($conn, $sql);

    // while ($row = mysqli_fetch_assoc($brgy_clear)) {
    //     $brgy_clear_arr[] = $row['User_id'];

    // }

    // if ($brgy_clear->num_rows != 0) {
    //     $position = array_search($id, $brgy_clear_arr);
    //     $document = 'Barangay Clearance';

    // }

    // $sql = "SELECT * FROM tbl_indigency brgy, docu_table dc where DATE = '$date' and brgy.User_id = dc.user_id";
    // $indigency = mysqli_query($conn, $sql);

    // while ($row = mysqli_fetch_assoc($indigency)) {
    //     $indigency_arr[] = $row['User_id'];

    // }

    // if ($indigency->num_rows != 0) {
    //     $position = array_search($id, $indigency_arr);
    //     $document = 'Indigency';

    // }

    // $sql = "SELECT * FROM tbl_policeclr brgy, docu_table dc where DATE = '$date' and brgy.User_id = dc.user_id";
    // $police_clear = mysqli_query($conn, $sql);

    // while ($row = mysqli_fetch_assoc($police_clear)) {
    //     $police_clear_arr[] = $row['User_id'];

    // }

    // if ($police_clear->num_rows != 0) {
    //     $position = array_search($id, $police_clear_arr);
    //     $document = 'Business Clearance';

    // }

    // $sql = "SELECT * FROM tbl_residency brgy, docu_table dc where DATE = '$date' and brgy.User_id = dc.user_id";
    // $residency = mysqli_query($conn, $sql);

    // while ($row = mysqli_fetch_assoc($residency)) {
    //     $residency_arr[] = $row['User_id'];

    // }

    // if ($residency->num_rows != 0) {
    //     $position = array_search($id, $residency_arr);
    //     $document = 'Residency';

    // }

}

// echo '<pre>';
// var_dump($document);
// echo '<pre>';

header("Refresh:2");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Current Queue</title>
    <link href="assets/css/main.css" rel="stylesheet" />
    <link href="assets/css/icons.css" rel="stylesheet" />
    <link href="assets/css/basic.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
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

    </div>
    <div class="col-md-4" style="padding-top: 1rem" >
        </div>
        <div class="col-md-4" style="padding-top: 1rem" >
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="text-center">You are in Queue</h2>
                </div>
                <div style="text-align:center;">
                <?php if ($position != 0 && $position >= 1): ?>
                    <h2>Position next in Queue: <?php echo $position; ?></h2>
                <?php elseif ($position == 0 && $position != ""): ?>
                    <h2>Proceed to the <?php echo $document; ?> Counter</h2>
                <?php else: ?>
                    <h2>You Are Not In Queue</h2>
                <?php endif;?>
                <?php if ($document == ''): ?>
                <?php else: ?>
                    <h2>Document: <?php echo $document; ?></h2>
                <?php endif;?>
                    <h1>ID Number: <?php echo $id; ?></h1>
                </div>
            </div>
        </div>
        <div class="col-md-4" style="padding-top: 1rem" >
        </div>
</body>
</html>
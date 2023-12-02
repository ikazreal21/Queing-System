<?php
include "../../process.php";

$date = date('Y-m-d');
$time = date('h:i');

$arr = [];
$arr2 = [];
$arr3 = [];
$queue_id = '';
$fullname = '';
$first_name = '';
$birthday = '';
$number_id = '';

$sql = "SELECT * FROM tbl_policeclr plc, docu_table dc where DATE = '$date' and plc.User_id = dc.user_id  order by ID ASC limit 2";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    $arr[] = $row;
    // echo '<pre>';
    // var_dump($arr);
    // echo '<pre>';
}
if (count($arr) != 0) {
    $queue_id = $arr[0]['User_id'];
    $number_id = $arr[0]['docu_table_id'];
}

$sql = "SELECT * FROM tbl_userinformation where queue_id = '$queue_id'";
$result2 = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result2)) {
    $arr2[] = $row;
    // echo '<pre>';
    // var_dump($arr2);
    // echo '<pre>';
}

if (count($arr2) != 0) {
    $fullname = $arr2[0]['first_name'] . ' ' . $arr2[0]['middle_name'] . ' ' . $arr2[0]['last_name'];
    $first_name = $arr2[0]['first_name'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sql = "INSERT INTO tbl_records(Department,DATE,TIME,fullname,User_id) VALUES ('Business Clearance','$date','$time','$fullname','$queue_id')";
    $insert = $conn->query($sql);

    $sql = "INSERT INTO tbl_pcrecords(Department,DATE,TIME,User_id,user_first_name) VALUES ('Business Clearance','$date','$time','$queue_id','$first_name')";
    $insert = $conn->query($sql);

    $sql = "DELETE FROM tbl_policeclr WHERE  DATE = '$date' order by ID ASC limit 1";
    $delete = $conn->query($sql);

    $sql = "UPDATE docu_table set police_clearance = 0 WHERE user_id = '$queue_id' order by docu_table_id DESC limit 1";
    $update = $conn->query($sql);

    $sql = "SELECT * FROM docu_table where user_id = '$queue_id' order by docu_table_id DESC limit 1";
    $next = $conn->query($sql);
    // echo '<pre>';
    // var_dump($next);
    // echo '<pre>';

    while ($row = mysqli_fetch_assoc($next)) {
        $arr3[] = $row;
        // echo '<pre>';
        // var_dump($arr2);
        // echo '<pre>';
    }
    if ($arr3[0]['brgy_id']) {
        if ($arr3[0]['cedula']) {
            $sql = "INSERT INTO tbl_cedula(DATE,TIME,User_id,user_first_name) VALUES ('$date','$time','$queue_id', '$first_name')";
            $insert = $conn->query($sql);
        } else {
            $sql = "INSERT INTO tbl_brgyid(DATE,TIME,User_id,user_first_name) VALUES ('$date','$time','$queue_id', '$first_name')";
            $insert = $conn->query($sql);
        }
    } elseif ($arr3[0]['brgy_clearance']) {
        if ($$arr3[0]['brgy_id']) {
            $sql = "INSERT INTO tbl_cedula(DATE,TIME,User_id,user_first_name) VALUES ('$date','$time','$queue_id', '$first_name')";
            $insert = $conn->query($sql);
        } else {
            $sql = "INSERT INTO tbl_clearance(DATE,TIME,User_id,user_first_name) VALUES ('$date','$time','$queue_id', '$first_name')";
            $insert = $conn->query($sql);
        }
    } elseif ($arr3[0]['cedula']) {
        $sql = "INSERT INTO tbl_cedula(DATE,TIME,User_id,user_first_name) VALUES ('$date','$time','$queue_id', '$first_name')";
        $insert = $conn->query($sql);
    } elseif ($arr3[0]['recidency']) {
        $sql = "INSERT INTO tbl_residency(DATE,TIME,User_id,user_first_name) VALUES ('$date','$time','$queue_id', '$first_name')";
        $insert = $conn->query($sql);
    } elseif ($arr3[0]['indigency']) {
        $sql = "INSERT INTO tbl_indigency(DATE,TIME,User_id,user_first_name) VALUES ('$date','$time','$queue_id', '$first_name')";
        $insert = $conn->query($sql);
    } elseif ($arr3[0]['police_clearance']) {
        $sql = "INSERT INTO tbl_policeclr(DATE,TIME,User_id,user_first_name) VALUES ('$date','$time','$queue_id', '$first_name')";
        $insert = $conn->query($sql);
    } else {
        $user_id = $arr3[0]['user_id'];
        $sql = "DELETE FROM docu_table WHERE user_id = '$user_id'";
        $next = $conn->query($sql);
        header('Location:index.php');
    }
    header('Location:index.php');
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
                <a class="navbar-brand" href="">Business Clearance</a>
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
                        <a class="active-menu" href="index.php"><i class="fa fa-user "></i>Active Queue</a>
                    </li>
                    <li>
                        <a href="pcrec.php">Business Clearance Records</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner" class="bg-image">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Business Clearance</h1>
                    </div>
                </div>
                <div class="row text-center pad-row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="panel  panel-info active-plan-price">
                            <div class="panel-heading">
                                <h4>Current Queue</h4>
                            </div>
                            <div class="panel-body">
                                <div class="round-body">
                                    <div class="price-main">
                                        <h2>Fullname: <?php echo $fullname; ?> </h2>
                                    </div>
                                </div>
                                <ul class="plan-two ">
                                    <h3>Queue ID: <b>00-<?php echo $number_id; ?></b></h3>
                                </ul>
                                <form action="" method="post">
                                    <button type="submit" class="btn btn-info">Next</button>
                                    <a href="swap.php?id1=<?php echo $arr[0]["ID"]; ?>&id2=<?php echo $arr[1]["ID"]; ?>" class="btn btn-warning">Swap</a>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-2"></div>
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

<?php
include "../../process.php";
include "../../admin/validation.php";
include "../../function.php";

$date = date('Y-m-d');
$time = date('h:i');
$firstname = "";
$middlename = "";
$lastname = "";
$gender = "";
$birhtplace = "";
$birthdate = date('Y-m-d');

// echo '<pre>';
// var_dump($date);
// echo '<pre>';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $firstname = $_POST['first_name'];
    $middlename = $_POST['middle_name'];
    $lastname = $_POST['last_name'];
    $gender = $_POST['gender'];
    $birhtplace = $_POST['birth_place'];
    $birthdate = date('Y-m-d', strtotime($_POST['birth_date']));
    $user_id_and_queue_id = randomString(6);

    // $brgy_id =  isset($_POST['brgyid']);
    // $cedula =  isset($_POST['cedula']);
    // $recidency =  isset($_POST['residency']);
    // $brgy_clearance = isset($_POST['clearance']);
    // $indigency =  isset($_POST['indigency']);
    // $police_clearance =  isset($_POST['pc']);

    // echo '<pre>';
    // var_dump($_POST);
    // echo '<pre>';

    $sql = "INSERT INTO tbl_userinformation(first_name, middle_name, last_name, gender, birthplace, birthday, queue_id) VALUES ('$firstname','$middlename','$lastname','$gender','$birhtplace','$birthdate','$user_id_and_queue_id')";
    $insert = $conn->query($sql);

    // $sql = "INSERT INTO docu_table(user_id, cedula, brgy_id, brgy_clearance, indigency, recidency, police_clearance) VALUES ('$user_id_and_queue_id','$cedula','$brgy_id','$brgy_clearance','$indigency','$recidency','$police_clearance')";
    // $insert = $conn->query($sql);

    // if ($brgy_id) {
    //     if ($cedula) {
    //         $sql = "INSERT INTO tbl_cedula(DATE,TIME,User_id,user_first_name) VALUES ('$date','$time','$user_id_and_queue_id', '$firstname')";
    //         $insert = $conn->query($sql);
    //     } else {
    //         $sql = "INSERT INTO tbl_brgyid(DATE,TIME,User_id,user_first_name) VALUES ('$date','$time','$user_id_and_queue_id', '$firstname')";
    //         $insert = $conn->query($sql);
    //     }
    // } elseif ($brgy_clearance) {
    //     if ($cedula) {
    //         $sql = "INSERT INTO tbl_cedula(DATE,TIME,User_id,user_first_name) VALUES ('$date','$time','$user_id_and_queue_id', '$firstname')";
    //         $insert = $conn->query($sql);
    //     } else {
    //         $sql = "INSERT INTO tbl_clearance(DATE,TIME,User_id,user_first_name) VALUES ('$date','$time','$user_id_and_queue_id', '$firstname')";
    //         $insert = $conn->query($sql);
    //     }
    // } elseif ($cedula) {
    //     $sql = "INSERT INTO tbl_cedula(DATE,TIME,User_id,user_first_name) VALUES ('$date','$time','$user_id_and_queue_id', '$firstname')";
    //     $insert = $conn->query($sql);
    // } elseif ($recidency) {
    //     $sql = "INSERT INTO tbl_residency(DATE,TIME,User_id,user_first_name) VALUES ('$date','$time','$user_id_and_queue_id', '$firstname')";
    //     $insert = $conn->query($sql);
    // } elseif ($indigency) {
    //     $sql = "INSERT INTO tbl_indigency(DATE,TIME,User_id,user_first_name) VALUES ('$date','$time','$user_id_and_queue_id', '$firstname')";
    //     $insert = $conn->query($sql);
    // } elseif ($police_clearance) {
    //     $sql = "INSERT INTO tbl_policeclr(DATE,TIME,User_id,user_first_name) VALUES ('$date','$time','$user_id_and_queue_id', '$firstname')";
    //     $insert = $conn->query($sql);
    // }

    header("location:visitors_record.php");

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
                                <a href="../../admin/pcrec.php">Business Clearance</a>
                                <a href="../../admin/cedrec.php">Building Clearance</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Front Desk<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
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
        <script type="text/javascript">
		function printContent() {
            var iframe = document.getElementById("myiframe");
            iframe.contentWindow.print();
            }
        </script>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" class="bg-image">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Queue Form</h1>
                    </div>
                </div>
                <div class="col-md-12 col-sm-6 col-xs-12">
                    <div class="panel panel-b">
                        <div class="panel-body">
                            <form role="form" method="post">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label>First Name</label>
                                        <input class="form-control" name="first_name" type="text" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Middle Name</label>
                                        <input class="form-control" name="middle_name" type="text">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Last Name</label>
                                        <input class="form-control" name="last_name" type="text" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label>Birth Place</label>
                                        <input class="form-control" name="birth_place" type="text" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Birth Date</label>
                                        <input class="form-control" name="birth_date" type="date" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Gender</label>
                                        <select name="gender" class="form-control" required>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- <div class="form-group">
                                    <label>Documents</label>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="brgyid" value="True">Barangay ID
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="cedula" value="True">Cedula
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="residency" value="True">Residency
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="clearance" value="True">Barangay Clearance
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="indigency" value="True">Indigency
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="pc" value="True">Business Clearance
                                        </label>
                                    </div>
                                </div> -->
                                <button type="submit" class="btn btn-info">Add Visitor's Record </button>
                                <!-- <iframe id="myiframe" src="../../receipt.php?id=<?php echo $user_id_and_queue_id; ?>" style="display:none;"></iframe> -->
                            </form>
                        </div>
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

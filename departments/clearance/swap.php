<?php
session_start();

include "../../process.php";


$id1 = $_GET['id1'] ?? '';
$id2 = $_GET['id2'] ?? '';

$sql = "UPDATE
        tbl_clearance t1 INNER JOIN tbl_clearance t2
        ON (t1.ID, t2.ID) IN (($id1,$id2),($id2,$id1))
        SET
        t1.DATE = t2.DATE,
        t1.TIME = t2.TIME,
        t1.User_id = t2.User_id,
        t1.user_first_name = t2.user_first_name";

$result = mysqli_query($conn, $sql);

header("location:index.php");

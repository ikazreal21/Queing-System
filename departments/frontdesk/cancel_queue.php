<?php
include "../../process.php";
include "../../admin/validation.php";    
include "../../function.php";    


$id = $_GET['id'] ?? '';
    
// echo '<pre>';
// var_dump($link.$id);
// echo '<pre>';

$date = date('Y-m-d');
$time = date('h:i');


$sql = "SELECT * FROM docu_table where user_id = '$id' order by docu_table_id DESC limit 1";
$next = $conn->query($sql);
$next2 = $next->fetch_array();

echo '<pre>';
var_dump($next2);
echo '<pre>';

if ($next2['brgy_id']) {
    if ($next2['cedula']) {
        $sql = "DELETE FROM tbl_cedula WHERE User_id = '$id' and DATE = '$date' order by ID ASC limit 1";
        $delete = $conn->query($sql);
    } else {
        $sql = "DELETE FROM tbl_brgyid WHERE User_id = '$id' and DATE = '$date' order by ID ASC limit 1";
        $delete = $conn->query($sql);
    }
} elseif ($next2['brgy_clearance']) {
    if ($$next2['brgy_id']) {
        $sql = "DELETE FROM tbl_cedula WHERE User_id = '$id' and DATE = '$date' order by ID ASC limit 1";
        $delete = $conn->query($sql);
    } else {
        $sql = "DELETE FROM tbl_clearance WHERE User_id = '$id' and DATE = '$date' order by ID ASC limit 1";
        $delete = $conn->query($sql);
    }
} elseif ($next2['cedula']) {
    $sql = "DELETE FROM tbl_cedula WHERE User_id = '$id' and DATE = '$date' order by ID ASC limit 1";
    $delete = $conn->query($sql);
} elseif ($next2['recidency']) {
    $sql = "DELETE FROM tbl_residency WHERE User_id = '$id' and DATE = '$date' order by ID ASC limit 1";
    $delete = $conn->query($sql);
} elseif ($next2['indigency']) {
    $sql = "DELETE FROM tbl_indigency WHERE User_id = '$id' and DATE = '$date' order by ID ASC limit 1";
    $delete = $conn->query($sql);
} elseif ($next2['police_clearance']) {
    $sql = "DELETE FROM tbl_policeclr WHERE User_id = '$id' and DATE = '$date' order by ID ASC limit 1";
    $delete = $conn->query($sql);
}

$sql = "DELETE FROM docu_table WHERE user_id = '$id'";
$next = $conn->query($sql);

header('Location:view_visitor.php?id='. $id);
 

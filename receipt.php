<?php
session_start();

include "process.php";
// select the latest inserted data
$id = $_GET['id'] ?? '';
$arr = [];
$arr2 = [];
$first_name = '';
$date = date('Y-m-d');
$time = date('h:i');

// $query = "SELECT * FROM docu_table ORDER BY docu_table_id DESC LIMIT 1";
// $result = mysqli_query($conn, $query);

// while ($row = mysqli_fetch_assoc($result)) {
//     $arr[] = $row;
//     // echo '<pre>';
//     // var_dump($arr);
//     // echo '<pre>';
// } 

// if (count($arr) != 0) {
//     $id = $arr[0]['user_id'];
// }


$sql = "SELECT * FROM docu_table where user_id = '$id'";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    $id_queue = $row['docu_table_id'];
}


$query = "SELECT * FROM tbl_userinformation where queue_id = '$id'";
$result = mysqli_query($conn, $query);




while ($row = mysqli_fetch_assoc($result)) {
    $arr2[] = $row;
    // echo '<pre>';
    // var_dump($arr);
    // echo '<pre>';
} 

if (count($arr2) != 0) {
    $first_name = $arr2[0]['first_name'];
}


if (count($arr2) != 0) {
    // output the latest data
    echo '<div style="text-align: center;">';
    echo '<style type="text/css" media="print">';
    echo ' @page {';
    echo   ' size: auto;';   /* auto is the initial value */
    echo    'margin: 0;';  /* this affects the margin in the printer settings */
    echo '}';
    echo '</style>';
    echo "Brgy. Mahabang Parang Angono, Rizal";
    echo "</div>";
    // echo "Department: " . '&nbsp'. '&nbsp'. '&nbsp'. '&nbsp'. '&nbsp' . '<span style="display: inline; margin: 0 auto; text-align: right; font-size: 20px; font-family: Helvetica">' . $row["Department"] . '</span>' . '</br>';
    echo "Date: " . '&nbsp'. '&nbsp'. '&nbsp'. '&nbsp'. '&nbsp' . '<span style="display: inline; margin: 0 auto; text-align: center; font-size: 10px; font-family: Helvetica">' . $date . '</span>' . '<br>';
	echo "Time: "  . '&nbsp'. '&nbsp'. '&nbsp'. '&nbsp'. '&nbsp' . '<span style="display: inline; margin: 0 auto; text-align: center; font-size: 10px; font-family: Helvetica">' . $time . '</span>' . "<br>";
    echo '<div style="text-align: center;">';
    echo "**Your Queue Identification**";
    echo '<span style="display: block; margin: 0 auto; font-size: 30px; font-family: Helvetica">00-' . $id_queue . ' </span>';
    echo '<span style="display: block; margin: 0 auto; font-size: 30px; font-family: Helvetica">' . $first_name . '</span>';
    echo "KEEP TICKET FOR VERIFICATION";
    echo '<div>';
    echo "</div>";
    echo '<div style="margin-bottom: 5px;">';
    echo "</div>";
    echo "</div>";
    echo '<div style="text-align: center;">';
    echo "<img width='150' height='150' src='departments/frontdesk/image/".$id.".png' alt=''>";
    echo "</div>";
    echo '<div style="margin-bottom: 5px;">';
    echo "</div>";
    echo '<div style="text-align: center;">';
    echo "SCAN QR CODE FOR QUEUE POSITION";
    echo "</div>";

    // ...
} else {
    echo "No data found.";
}

?>
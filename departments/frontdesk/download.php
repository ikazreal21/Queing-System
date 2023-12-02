<?php 

include "../../process.php";

$id = $_GET['id'] ?? '';
$name = $_GET['name'] ?? '';
// $date = date('Y-m-d');

// echo '<pre>';
// var_dump($date);
// echo '<pre>';

$sql = "SELECT Department, DATE, TIME, fullname, User_id FROM tbl_records where  User_id = '$id'";
$result = mysqli_query($conn, $sql);



$filename = "record_for_".$name . ".xls";			
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=\"$filename\"");

$firstrow=false;
while ($row = mysqli_fetch_assoc($result))
{
    if(!$firstrow)
    {
        echo implode("\t",array_keys($row))."\n";
        $firstrow=true;
    }
    
    echo implode("\t",array_values($row))."\n";
    
}

exit;

 ?>
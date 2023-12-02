<?php 

include "../process.php";


$date = date('Y-m-d');

// echo '<pre>';
// var_dump($date);
// echo '<pre>';

$sql = "SELECT Department, DATE, TIME, fullname, User_id FROM tbl_records where DATE = '$date'";
$result = mysqli_query($conn, $sql);



$filename = "record_for_".$date . ".xls";			
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
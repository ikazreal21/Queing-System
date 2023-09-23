<?php
include "process.php";

$sql = "SELECT * FROM tbl_residency";
$result = mysqli_query($conn, $sql);
$resi = "Residency";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sql1 = "DELETE FROM tbl_residency WHERE DEP = '$resi' order by NUMQ ASC limit 1";
    $insert = $conn->query($sql1);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>RECORDS</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
			font-family: Franklin Gothic Medium;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even){background-color: #f2f2f2}

        th {
            background-color: #c31432;
            color: white;
        }

        button {
            background-color: #c31432;
            color: white;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border: none;
			font-family: Franklin Gothic Medium;
        }

        a {
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>Department</th>
        <th>Date</th>
        <th>Time</th>
        <th>Number currently serving</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?php echo $row['DEP']; ?></td>
            <td><?php echo $row['DATE']; ?></td>
            <td><?php echo $row['TIME']; ?></td>
            <td><?php echo $row['NUMQ']; ?></td>
        </tr>
        <?php
    }
    ?>
</table>
<form method="POST" action="">
    <button type="submit">Next</button>
    <button type="button"><a href="LP/lpresidency.php">Back</a></button>
</form>
</body>
</html>

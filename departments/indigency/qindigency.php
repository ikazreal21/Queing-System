<?php
include "process.php";

$sql = "SELECT * FROM tbl_indigency";

$result = mysqli_query($conn, $sql);

$clr = "Indigency";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sql1 = "DELETE FROM tbl_indigency WHERE DEP = '$clr' order by NUMQ ASC  limit 1";
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
            <th>NUMBER CURRENTLY SERVING</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?php echo $row['DEP']; ?></td>
                <td><?php echo $row['DATE']; ?></td>
                <td><?php echo $row['TIME']; ?></td>
                <td><?php echo $row['NUMQ']; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
    <form method="POST" action="">
        <button type="submit">Next</button>
    <button><a href="LP/lpclearance.php">Back</a></button>
	</form>
</body>
</html>

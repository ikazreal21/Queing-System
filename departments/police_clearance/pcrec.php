<?php
include "../../process.php";

$sql = "SELECT * FROM tbl_pcrecords";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>RECORDS</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
			text-align: center;
			font-family: Franklin Gothic Medium;
		}
		th, td {
			padding: 8px;
			text-align: center;
			border-bottom: 1px solid #ddd;
		}
		th {
			background-color: #0435f7;
			color: white;
		}
		button {
			margin-top: 20px;
			background-color: #0435f7;
			color: white;
			border: none;
			padding: 10px;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
			font-family: Franklin Gothic Medium;
		}
		button:hover {
			background-color: #005A6E;
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
			<th>ID</th>
			<th>Date</th>
			<th>Time</th>
			<th>First Name</th>
			<th>User ID</th>
		</tr>
		<?php
while ($row = mysqli_fetch_assoc($result)) {
    ?>
		<tr>
			<td><?php echo $row['ID']; ?></td>
			<td><?php echo date('M d, Y', strtotime($row['DATE'])); ?></td>
			<td><?php echo $row['TIME']; ?></td>
			<td><?php echo $row['user_first_name']; ?></td>
			<td><?php echo $row['User_id']; ?></td>
		</tr>
		<?php }?>
	</table>
	<button type="button"><a href="index.php">Back</a></button>
</body>
</html>

<?php

include "process.php";

$sql = "SELECT * FROM tbl_cedula";

$result = mysqli_query($conn, $sql);

$ced = "Cedula";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sql1 = "DELETE FROM tbl_cedula WHERE DEP = '$ced' order by NUMQ ASC  limit 1";
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

      th {
        background-color: #0435f7;
        color: white;
      }

      tr:nth-child(even) {
        background-color: #f2f2f2;
      }

      button {
        background-color: #0435f7;
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        font-family: Franklin Gothic Medium;
      }

      button a {
        color: white;
        text-decoration: none;
      }

      button:hover {
        background-color: #005A6E;
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
      <?php while ($row = mysqli_fetch_assoc($result)) {?>
        <tr>
          <td><?php echo $row['DEP']; ?></td>
          <td><?php echo date('M d, Y', strtotime($row['DATE'])); ?></td>
          <td><?php echo $row['TIME']; ?></td>
          <td><?php echo $row['NUMQ']; ?></td>
        </tr>
      <?php }?>
    </table>
    <form method="POST" action="">
      <button type="submit">Next</button>
      <button><a href="LP/lpcedula.php">Back</a></button>
    </form>
  </body>
</html>

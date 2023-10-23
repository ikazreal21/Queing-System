<?php
include "process.php";

$ced = "Barangay ID";
$ced1 = "Brgy.Clearance";
$ced2 = "Indigency";
$ced3 = "Residency";
$ced4 = "Business Clearance";
$ced5 = "Cedula";

$sql = "SELECT * FROM tbl_brgyid WHERE DEP = '$ced' order by NUMQ ASC limit 1";
$sql1 = "SELECT * FROM tbl_clearance WHERE DEP = '$ced1' order by NUMQ ASC limit 1";
$sql2 = "SELECT * FROM tbl_indigency WHERE DEP = '$ced2' order by NUMQ ASC limit 1";
$sql3 = "SELECT * FROM tbl_residency WHERE DEP = '$ced3' order by NUMQ ASC limit 1";
$sql4 = "SELECT * FROM tbl_policeclr WHERE DEP = '$ced4' order by NUMQ ASC limit 1";
$sql5 = "SELECT * FROM tbl_cedula WHERE DEP = '$ced5' order by NUMQ ASC limit 1";

$result = mysqli_query($conn, $sql);
$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);
$result3 = mysqli_query($conn, $sql3);
$result4 = mysqli_query($conn, $sql4);
$result5 = mysqli_query($conn, $sql5);
?>

<!DOCTYPE html>
<html>
  <head>
    <title>RECORDS</title>
    <style>
      .menu {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #0435f7;
        font-family: Franklin Gothic Medium;
      }

      .menu li {
        float: left;
      }

      .menu li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
      }

      .menu li a:hover {
        background-color: #111;
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

      .center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 45%;
    opacity: 0.05;
  }


    </style>
  </head>

  <body>

	<table>
      <tr>
        <th>NUMBER CURRENTLY SERVING</th>
      </tr>
      <?php while ($row = mysqli_fetch_assoc($result)) {?>
        <tr>
          <td><?php echo $row['NUMQ']; ?></td>
        </tr>
      <?php }?>
	      <?php while ($row = mysqli_fetch_assoc($result1)) {?>
        <tr>
          <td><?php echo $row['NUMQ']; ?></td>
        </tr>
      <?php }?>
	      <?php while ($row = mysqli_fetch_assoc($result2)) {?>
        <tr>
          <td><?php echo $row['NUMQ']; ?></td>
        </tr>
      <?php }?>
	      <?php while ($row = mysqli_fetch_assoc($result3)) {?>
        <tr>
          <td><?php echo $row['NUMQ']; ?></td>
        </tr>
      <?php }?>
	      <?php while ($row = mysqli_fetch_assoc($result4)) {?>
        <tr>
          <td><?php echo $row['NUMQ']; ?></td>
        </tr>
      <?php }?>
	      <?php while ($row = mysqli_fetch_assoc($result5)) {?>
        <tr>
          <td><?php echo $row['NUMQ']; ?></td>
        </tr>
      <?php }?>
    </table>
    <button type="button"><a href="LP/lp.php">Back</a></button>
    <div class="bg">
      <img src="bglogo.png" alt="Logo" class="center">
    </div>
  </body>
</html>
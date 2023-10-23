<?php
session_start();

include "process.php";

date_default_timezone_set('Asia/Manila');

$currentNumber = 0;

if (isset($_SESSION['currentNumber'])) {
    // Read the current number from the session
    $currentNumber = $_SESSION['currentNumber'];
}

// Check if the number exceeds the limit of 30
if ($currentNumber > 30) {
    $currentNumber = 0; // Reset to 0
}

// Save the updated number to the session

$dede = "";
$d = date('Y-m-d');
$t = date('h:i');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['count'])) {
        $dede = "";
        $d = date('Y-m-d');
        $t = date('h:i');

    }

    if (isset($_POST['increment'])) {

        $currentNumber++;
        $_SESSION['currentNumber'] = $currentNumber;

        $dede = $_POST['dept'];
        $d = date('Y-m-d');
        $t = date('h:i');

        if ($dede == "Barangay ID") {
            $sql = "INSERT INTO tbl_brgyid(DEP,DATE,TIME,NUMQ) VALUES ('$dede','$d','$t','$currentNumber')";
            $insert = $conn->query($sql);
            $sql1 = "INSERT INTO tbl_idrecords(Department,DATE,TIME,NUMBER) VALUES ('$dede','$d','$t','$currentNumber')";
            $insert1 = $conn->query($sql1);
        }

        if ($dede == "Brgy.Clearance") {
            $sql = "INSERT INTO tbl_clearance(DEP,DATE,TIME,NUMQ) VALUES ('$dede','$d','$t','$currentNumber')";
            $insert = $conn->query($sql);
            $sql1 = "INSERT INTO tbl_clrrecords(Department,DATE,TIME,NUMBER) VALUES ('$dede','$d','$t','$currentNumber')";
            $insert1 = $conn->query($sql1);
        }

        if ($dede == "Indigency") {
            $sql = "INSERT INTO tbl_indigency(DEP,DATE,TIME,NUMQ) VALUES ('$dede','$d','$t','$currentNumber')";
            $insert = $conn->query($sql);
            $sql1 = "INSERT INTO tbl_indrecords(Department,DATE,TIME,NUMBER) VALUES ('$dede','$d','$t','$currentNumber')";
            $insert1 = $conn->query($sql1);
        }

        if ($dede == "Residency") {
            $sql = "INSERT INTO tbl_residency(DEP,DATE,TIME,NUMQ) VALUES ('$dede','$d','$t','$currentNumber')";
            $insert = $conn->query($sql);
            $sql1 = "INSERT INTO tbl_resrecords(Department,DATE,TIME,NUMBER) VALUES ('$dede','$d','$t','$currentNumber')";
            $insert1 = $conn->query($sql1);

        }

        if ($dede == "Business Clearance") {
            $sql = "INSERT INTO tbl_policeclr(DEP,DATE,TIME,NUMQ) VALUES ('$dede','$d','$t','$currentNumber')";
            $insert = $conn->query($sql);
            $sql1 = "INSERT INTO tbl_pcrecords(Department,DATE,TIME,NUMBER) VALUES ('$dede','$d','$t','$currentNumber')";
            $insert1 = $conn->query($sql1);
        }

        if ($dede == "Cedula") {
            $sql = "INSERT INTO tbl_cedula(DEP,DATE,TIME,NUMQ) VALUES ('$dede','$d','$t','$currentNumber')";
            $insert = $conn->query($sql);
            $sql1 = "INSERT INTO tbl_cedrecords(Department,DATE,TIME,NUMBER) VALUES ('$dede','$d','$t','$currentNumber')";
            $insert1 = $conn->query($sql1);
        }

    }

    $sql = "INSERT INTO tbl_records(Department,DATE,TIME,NUMBER) VALUES ('$dede','$d','$t','$currentNumber')";

    $insert = $conn->query($sql);

    if ($insert == true) {
        ?>
<script>
	alert("Successfully Added")
</script>
<?php
}
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>LOGIN FORM</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
			font-family: Franklin Gothic Medium;
		}
		form {
			background-color: white;
			padding: 20px;
			margin: 20px;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
		}
		label {
			display: block;
			margin-bottom: 10px;
		}
		input[type="submit"], button {
			background-color: #0435f7;
			color: white;
			padding: 10px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			margin-top: 10px;
		}
		input[type="submit"]:hover, button:hover {
			background-color: #14c383;

		}
		select, input[type="hidden"], p {
			display: block;
			margin-bottom: 10px;
			font-size: 16px;
			padding: 10px;
			border-radius: 5px;
			border: 1px solid #ccc;
			width: 20%;
			box-sizing: border-box;
		}
	</style>
</head>
<body>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<script type="text/javascript">
		function printContent() {
    var iframe = document.getElementById("myiframe");
    iframe.contentWindow.print();
	}
	</script>


	<form method="POST">

	<label>Reason of Visit</label>
	<select name="dept" required>
	<option value="">--Choose a Department--</option>
	<option name="Barangay ID" value="Barangay ID">Barangay ID</option>
	<option name="Brgy.Clearance" value="Brgy.Clearance">Brgy.Clearance</option>
	<option name="Indigency" value="Indigency">Indigency</option>
	<option name="Residency" value="Residency">Residency</option>
	<option name="Business Clearance" value="Business Clearance">Business Clearance</option>
	<option name="Cedula" value="Cedula">Building Clearance</option>
	</select>

  <label>Date: <?php echo date("Y/m/d"); ?></label>

  <label>Time: <?php echo date("h:i"); ?></label>


  <input type="submit" name="increment" value="Generate Number">
  <input type="hidden" name="count" value="<?php echo $count; ?>">
  <button type="button"><a href="LP/lp.php">Back</a></button>
</form>
	  <button onclick="printContent()">Print Queuing Number</button>
  <iframe id="myiframe" src="receipt.php" style="display:none;"></iframe>
  <p><?php echo $currentNumber; ?></p>
</body>
</html>
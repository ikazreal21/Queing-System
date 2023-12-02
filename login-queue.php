
<?php 

session_start(); 

include "process.php";


if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['uname']);

    $pass = validate($_POST['password']);

    if (empty($uname)) {

        header("Location: login-queue.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: login-queue.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM tbl_login WHERE USER='$uname' AND PASS='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {

            $row = mysqli_fetch_assoc($result);
			// echo '<pre>';
			// var_dump($row);
			// echo '<pre>';
			

            if ($row['USER'] == "admin") {
				$_SESSION['USER'] = "admin";
			
                header("Location:./WC/wc.php");

                exit();
			
            }
			
			else if($row['USER'] == "brgyid") {
				$_SESSION['USER'] = "brgyid";
				
                header("Location:departments/brgy_id/");

                exit();

			}
			
			else if($row['USER'] == "residency") {
				$_SESSION['USER'] = "residency";

                header("Location:departments/residency/");

                exit();

			}
			
			else if($row['USER'] == "clearance") {
				$_SESSION['USER'] = "clearance";

                header("Location:departments/clearance/");

                exit();

			}
			
			else if($row['USER'] == "indigency") {
				$_SESSION['USER'] = "indigency";

                header("Location:departments/indigency/");

                exit();

			}
			
			else if($row['USER'] == "pc") {
				$_SESSION['USER'] = "pc";

                header("Location:departments/police_clearance/");

                exit();

			}
			
			else if($row['USER'] == "bdclr") {
				$_SESSION['USER'] = "cedula";
				
                header("Location:departments/cedula/");

                exit();

			}
			
        }else{

            header("Location: login-queue.php?error=Incorect User name or password");

            exit();

        }

    }

}

?>





<!DOCTYPE html>

<html>

<head>
	<title>LOGIN FORM</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>


<body>
	<img src="try.png" alt="try">
    <div class="container">
	
	<h1>LOGIN</h1>
	<form action="" method="POST">
	<?php if (isset($_GET['error'])) {?>
	
		<p class="error"><?php echo$_GET['error']; ?></p>
		
	<?php }?>
	
	<label for="username">Username</label>
	
	<input type="text" id="username" name="uname" placeholder="Username" required><br>
	
	<label for="password">Password </label>
	
	<input type="password" id="password" name="password" placeholder="Password" required><br>
	
	<button type="submit">LOGIN</button>
	
	</form>
    </div>

</body>

</html>


<?php

session_start();


if ($_SESSION['USER'] != "admin") {
    if($_SESSION['USER'] == "brgyid") {

        
        header("Location:../departments/brgy_id/");

        exit();

    }

    else if($_SESSION['USER'] == "residency") {

        header("Location:../departments/residency/");

        exit();

    }

    else if($_SESSION['USER'] == "clearance") {

        header("Location:../departments/clearance/");

        exit();

    }

    else if($_SESSION['USER'] == "indigency") {

        header("Location:../departments/indigency/");

        exit();

    }

    else if($_SESSION['USER'] == "pc") {

        header("Location:../departments/police_clearance/");

        exit();

    }

    else if($_SESSION['USER'] == "cedula") {

        header("Location:../departments/cedula/");

        exit();

    }
}
			
    
		
?>
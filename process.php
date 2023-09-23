<?php

date_default_timezone_set('Asia/Manila');


$servername="localhost";
$username="root";
$password="";
$dbase="db_queue";


if(!$conn = new mysqli($servername,$username,$password,$dbase))
{
	die("failed to connect!");
}


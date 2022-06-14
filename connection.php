<?php

$dbhost = "localhost";
$dbuser = "id19099560_root";
$dbpass = "Mitainjilrevonuel-IS2R";
$dbname = "id19099560_login_sample_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}


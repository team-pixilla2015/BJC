<?php error_reporting( E_ALL ); ?>
<?php
$servername = "localhost";
/*$username = "pixilla";
$password = "rbd:b]]jk";*/
$username = "root";
$password = "";
$dbname = "pixilla_bjc";

// Create connection
//$conn =  mysql_connect($servername, $username, $password,$dbname);

$conn = mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if (mysqli_connect_errno())
  {
  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }else{
  	//echo "Connected successfully";
  }


$conn->set_charset("utf8");
// Check connection


?>
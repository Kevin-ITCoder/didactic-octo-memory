<?php
// database connection code
if(isset($_POST['txtName']))
{
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'kevin');

// get the post records

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

$txtFirstName = $_POST['txtName'];
$txtLastName = $_POST['txtLast'];
$txtSubject = $_POST['txtSubject'];

// database insert SQL code
$sql = "INSERT INTO `Contacts` (`FirstName`, `LastName`, `Subject`) VALUES ('$txtFirstName', '$txtLastName', '$txtSubject')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
}
else
{
	echo "Are you a genuine visitor?";

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());	
}
?>
}
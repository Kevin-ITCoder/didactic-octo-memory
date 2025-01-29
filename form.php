<?php
   if(isset($_POST['submit']) 
$name = $_POST['fname'];
$email = $_POST['email'];
$message = $_POST['msg'];

//database details. You have created these details in the third step. Use your own.
$host = "sql309.epizy.com";
$username = "epiz_30753146";
$password = "F6aOBSZc7DSm";
$dbname = "epiz_30753146_JASMS";

//create connection
$con = mysqli_connect($host, $username, $password, $dbname);
//check connection if it is working or not
if (!$con)
{
die("Connection failed!" . mysqli_connect_error());
}
//This below line is a code to Send form entries to database
$sql = "INSERT INTO `tvl_contact` (`FirstName`, `LastName`, `Subject`) VALUES ('$txtFirstName', '$txtLastName', '$txtSubject')";
//fire query to save entries and check it with if statement
$rs = mysqli_query($con, $sql);
if($rs)
{
echo "<h3>Successfully saved</h3>";
echo "Click Home Menu";
}
//connection closed.
mysqli_close($con);
}
?>
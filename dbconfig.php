
<?php
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "health";

$conn = new mysqli($host,$dbUsername,$dbPassword,$dbName);
if(mysqli_connect_error()){
  die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}
?>

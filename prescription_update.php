<?php
session_start();
$disease = $_POST['disease'];
$prescription = $_POST['prescription'];

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "health";

$conn = new mysqli($host,$dbUsername,$dbPassword,$dbName);
if(mysqli_connect_error()){
  die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}else{
  $INSERT = "INSERT INTO patient_report(disease,prescription,doctorid,patientid)
            VALUES('$disease', '$prescription',{$_SESSION['doctor_id']},{$_SESSION['patient_id']})";
  $res = mysqli_query($conn,$INSERT);
}
echo "Prescription Updated";
 ?>

<?php
include('connect.php');
//session_start();
$a = $_POST['offence_id'];
$b = $_POST['vehicle_no'];
$c = $_POST['driver_license'];
$d = $_POST['name'];
$e = $_POST['address'];
$f = $_POST['gender'];
$g = $_POST['officer_reporting'];
$h = $_POST['offence'];
// query
$sql = "INSERT INTO reported_offence (offence_id,vehicle_no,driver_license,name,address,gender,officer_reporting,offence,date) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h',now())";
$result=$db->query($sql);

if(!$result)
{
    header("location:report-offence.php?success=true");
}
else
{
    header("location:report-offence.php?success=true");
} 

?>
                            
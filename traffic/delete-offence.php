<?php
/**................................................................
 * ................................................................
 */


	include'connect.php';
  echo $id=$_GET['id'];
  $sql = "delete from reported_offence where id='$id'";
  //$result = $db->query($sql);
/*  
if(!$result)
{
    echo "Error MySQLI QUERY: ".mysqli_error($conn);
    die();
}
else
{
  //
    echo "Query succesfully executed!";
} */
if ($db->query($sql) === TRUE) 
{
  header("location:view-offence.php");
}
 else 
 {
  echo "Error deleting record: " . $conn->error;
}          
?>
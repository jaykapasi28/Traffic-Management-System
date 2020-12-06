<?php
/**................................................................
 * @package eblog v 1.0
 * @author Faith Awolu 
 * Hillsofts Technology Ltd.            
 * (hillsofts@gmail.com)
 * ................................................................
 */


	include'connect.php';
  $id=$_GET['id'];
  $sql = "DELETE FROM user WHERE id='$id'";
	$result = $db->query($sql);

  
  if(!$result)
  {
    echo "Error MySQLI QUERY: ".mysqli_error($conn);
    die();
  }
  else
  {
    header("location:view-users.php");
    //echo "Query succesfully executed!";
  } 
             
?>
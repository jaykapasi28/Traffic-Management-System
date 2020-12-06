                       <?php
                        /**................................................................
 * @package eblog v 1.0
 * @author Faith Awolu 
 * Hillsofts Technology Ltd.            
 * (hillsofts@gmail.com)
 * ................................................................
 */
                        
session_start();
include('connect.php');
 $user=$_SESSION['SESS_MEMBER_ID'];

$a = $_POST['email'];
$b = $_POST['name'];
$c = $_POST['address'];
// query

$sql = "UPDATE user SET 
        `email`='$a',`name`='$b',`address`='$c'
        WHERE id='$user'";


//$sql = "INSERT INTO settings (site_name,site_title,email,site_keyword,street,city,country,phone,facebook,twitter,linkedin,status) VALUES (:a,:b,:c,:d,:e,:f,:g,:h,:i,:j,:k,:l)";

$db->query($sql);

if ($db->query($sql) === TRUE) 
{
    header("location:user.php?success=true");
} 
else 
{
    header("location:user.php?failed=true");
}

?>
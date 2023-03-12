<?php
if($_REQUEST['id']==null)
{

echo'<script>history.back();</script>';
}
else
{
require'dbconnect.php';
$id=$_REQUEST['id'];
mysqli_query($con,"delete from doctor_details  where d_id='$id'");
echo'<script>alert("Delete Successfully");document.location="d_view.php";</script>';
}

?>

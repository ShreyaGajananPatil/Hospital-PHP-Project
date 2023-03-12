<?php
if($_REQUEST['id']==null)
{

echo'<script>history.back();</script>';
}
else
{
require'dbconnect.php';
$id=$_REQUEST['id'];
mysqli_query($con,"delete from hospital_details  where h_id='$id'");
echo'<script>alert("Delete Successfully");document.location="h_view.php";</script>';
}

?>

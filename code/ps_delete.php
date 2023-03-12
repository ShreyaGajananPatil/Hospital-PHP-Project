<?php
if($_REQUEST['id']==null)
{

echo'<script>history.back();</script>';
}
else
{
require'dbconnect.php';
$id=$_REQUEST['id'];
mysqli_query($con,"delete from prisciption_details  where ps_id='$id'");
echo'<script>alert("Delete Successfully");document.location="ps_view.php";</script>';
}

?>

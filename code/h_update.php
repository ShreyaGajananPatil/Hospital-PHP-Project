<?php
if($_POST['Submit']==null)
{
echo'<script>history.back();</script>';
}
else
{
require'dbconnect.php';
$id=$_POST['id'];
$a=$_POST['type'];
$b=$_POST['name'];
$c=$_POST['city'];
if(!mysqli_query($con,"update hospital_details set h_type='$a',h_name='$b',h_city='$c' where h_id='$id'"))
{
echo'<script>alert("Something went wrong");document.location="h_form.php";</script>';
}
else
{
echo'<script>alert("Hospital Details Added Successfully");document.location="h_view.php";</script>';
}
}
?>


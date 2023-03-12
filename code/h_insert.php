<?php
if($_POST['Submit']==null)
{
echo'<script>history.back();</script>';
}
else
{
require'dbconnect.php';
$a=$_POST['type'];
$b=$_POST['name'];
$c=$_POST['city'];
if(!mysqli_query($con,"insert into hospital_details values (null,'$a','$b','$c')"))
{
echo'<script>alert("Something went wrong");document.location="h_form.php";</script>';
}
else
{
echo'<script>alert("Hospital Details Added Successfully");document.location="h_view.php";</script>';
}
}
?>


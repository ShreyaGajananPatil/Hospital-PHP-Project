<?php
if($_POST['Submit']==null)
{
echo'<script>history.back();</script>';
}
else
{
require'dbconnect.php';
$a=$_POST['pid'];
$b=$_POST['pri'];
$c=$_POST['sd'];
if(!mysqli_query($con,"insert into prisciption_details values(null,'$a','$b','$c')"))
{
echo'<script>alert("Something went wrong");document.location="ps_form.php";</script>';
}
else
{
echo'<script>alert("Prisciption Details Added successfully");document.location="ps_view.php";</script>';
}
}
?>
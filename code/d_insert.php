<?php
if($_POST['Submit']==null)
{
echo'<script>history.back();</script>';
}
else
{
require'dbconnect.php';
$a=$_POST['hn'];
$b=$_POST['fn'];
$c=$_POST['ln'];
$d=$_POST['spec'];
$e=$_POST['con'];
if(!mysqli_query($con,"insert into doctor_details values(null,'$a','$b','$c','$d','$e')"))
{
echo'<script>alert("Something wemt wrong");document.location="d_form.php";</script>';
}
else
{
echo'<script>alert("Doctor Details Added successfully");document.location="d_view.php";</script>';
}
}
?>
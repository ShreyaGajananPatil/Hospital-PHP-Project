<?php
if($_POST['Submit']==null)
{
echo'<script>history.back();</script>';
}
else
{
require'dbconnect.php';
$a=$_POST['dn'];
$b=$_POST['fn'];
$c=$_POST['ln'];
$d=$_POST['mno'];
$e=$_POST['adr'];
if(!mysqli_query($con,"insert into patient_details values(null,'$a','$b','$c','$d','$e')"))
{
echo'<script>alert("Something wemt wrong");document.location="p_form.php";</script>';
}
else
{
echo'<script>alert("Patient Details Added successfully");document.location="p_view.php";</script>';
}
}
?>
<?php
if($_POST['Submit']==null)
{
echo'<script>history.back();</script>';
}
else
{
require'dbconnect.php';
$id=$_POST['id'];
$a=$_POST['dn'];
$b=$_POST['fn'];
$c=$_POST['ln'];
$d=$_POST['mno'];
$e=$_POST['adr'];
if(!mysqli_query($con,"update patient_details set d_id='$a',fname='$b',lname='$c',mobile='$d',address='$e' where p_id='$id'"))
{
echo'<script>alert("Something went wrong");document.location="p_form.php";</script>';
}
else
{
echo'<script>alert("Patient Details updated successfully");document.location="p_view.php";</script>';
}
}
?>
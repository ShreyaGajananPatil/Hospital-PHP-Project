<?php
if($_POST['Submit']==null)
{
echo'<script>history.back();</script>';
}
else
{
require'dbconnect.php';
$id=$_POST['id'];
$a=$_POST['hn'];
$b=$_POST['fn'];
$c=$_POST['ln'];
$d=$_POST['spec'];
$e=$_POST['con'];
if(!mysqli_query($con,"update doctor_details set h_id='$a',d_fname='$b',d_lname='$c',d_specialization='$d',d_connu='$e' where d_id='$id'"))
{
echo'<script>alert("Something wemt wrong");document.location="d_form.php";</script>';
}
else
{
echo'<script>alert("Doctor Details Added successfully");document.location="d_view.php";</script>';
}
}
?>
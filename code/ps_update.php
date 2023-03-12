<?php
if($_POST['Submit']==null)
{
echo'<script>history.back();</script>';
}
else
{
require'dbconnect.php';
$id=$_POST['id'];
$a=$_POST['pid'];
$b=$_POST['pri'];
$c=$_POST['sd'];
if(!mysqli_query($con,"update prisciption_details set p_id='$a',prisciption='$b',s_date='$c' where ps_id='$id'"))
{
echo'<script>alert("Something went wrong");document.location="ps_form.php";</script>';
}
else
{
echo'<script>alert("Prisciption Details updated successfully");document.location="ps_view.php";</script>';
}
}
?>
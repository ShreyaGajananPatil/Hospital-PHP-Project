
<?php
include'meta.php';
include'sidemenu.php';
include'header.php';
?>
<!-- Content Start -->
<div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <h3>Admin Panel</h3>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				
        <div class="basic-form-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-7 col-sm-7 col-xs-12">
                        <div class="sparkline8-list mt-b-30">
                            <div class="sparkline8-hd">
                                <div class="main-sparkline8-hd">
                                    <h1>Prisciption Details </h1>
                                </div>
                            </div>
                            <div class="sparkline8-graph">
                                <div class="basic-login-form-ad">
                                    
									
									
                                    <div class="row">
                                        <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                            <div class="basic-login-inner">
<?php include'val.php';?>
<form id="WFS_Riz"  name="form1" method="post" action="ps_insert.php">

     <div class="form-group-inner">
     <label>Patient</label>
      <select class="validate[required] form-control" style="width:90%" name="pid" type="text" class="style1" id="pid">
	   <option value="">-- Select Patient--</option>
	  <?php
	  include'dbconnect.php';
	  $res=mysqli_query($con,"select * from patient_details");
	  while($row=mysqli_fetch_array($res))
	  {
	  ?>
	  <option value="<?php echo $row['p_id']; ?>"><?php echo $row['fname'];?></option>
	  <?php }?>
	  </select>
  </div>

     <div class="form-group-inner">
     <label>Prisciption</label>
      <input class="validate[required] form-control" style="width:90%" name="pri" type="text" class="style1" id="pri">
    </div>
<div class="form-group-inner">
     <label>Date</label>
      
	  <input class="validate[required,custom[date]] form-control" style="width:90%" name="sd" type="text" class="style1" id="sd">
  
     
     </div>
	<div class="login-btn-inner">
		<div class="inline-remember-me">
			<input class="btn btn-sm btn-primary" name="Submit" value="Submit" type="submit"/>
		    <button class="btn btn-sm btn-default" type="reset">Reset</button>
		</div>
	</div>
</form>
</div>
                                        </div>
										
                                        
										
                                    </div>
                                </div>
								
                            </div>
                        </div>
                    </div>
					 </div>
                    </div> </div>
                    </div>

<!-- Content End -->
<?php
include'footer.php';
?>

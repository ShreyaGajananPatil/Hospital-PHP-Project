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
                                    <h1>Doctors Details </h1>
                                </div>
                            </div>
                            <div class="sparkline8-graph">
                                <div class="basic-login-form-ad">
                                    
									
									
                                    <div class="row">
                                        <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                            <div class="basic-login-inner">
<?php include'val.php';?>
<form id="WFS_Riz"  name="form1" method="post" action="d_insert.php">

 <div class="form-group-inner">
     <label>Hospital Name</label>
        <select class="validate[required] form-control" style="width:90%" name="hn" type="text" id="hn">
		 <option value="">-- Select Hospital--</option>
	  <?php
	  include'dbconnect.php';
	  $res=mysqli_query($con,"select * from hospital_details");
	  while($row=mysqli_fetch_array($res))
	  {
	  ?>
	  <option value="<?php echo $row['h_id']; ?>"><?php echo $row['h_name'];?></option>
	  <?php }?>
	  </select>
	    </div>

      <div class="form-group-inner">
     <label>First Name</label>
        <input class="validate[required,custom[onlyLetter]] form-control" style="width:90%" name="fn" type="text" id="fn">
		  </div>

     <div class="form-group-inner">
     <label>Last Name</label>
        <input class="validate[required,custom[onlyLetter]] form-control" style="width:90%" name="ln" type="text" id="ln">
		  </div>

     <div class="form-group-inner">
     <label>specialization</label>
        <input  class="validate[required] form-control" style="width:90%" name="spec" type="text" id="spec">
		  </div>

     <div class="form-group-inner">
     <label>Contact</label>
        <input class="validate[required,custom[mobile] form-control" style="width:90%" name="con" type="text" id="con">
		
     </div>
	<div class="login-btn-inner">
		<div class="inline-remember-me">
			<input class="btn btn-sm btn-primary" name="Submit" value="Submit" type="submit"/>
		    <input class="btn btn-sm btn-default" type="reset" value="Reset"/>
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
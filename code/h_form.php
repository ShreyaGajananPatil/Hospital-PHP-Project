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
                                    <h1>Hospital Details </h1>
                                </div>
                            </div>
                            <div class="sparkline8-graph">
                                <div class="basic-login-form-ad">
                                    
									
									
                                    <div class="row">
                                        <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                            <div class="basic-login-inner">
<?php include'val.php';?>

<form id="WFS_Riz"  name="form1" method="post" action="h_insert.php">

     <div class="form-group-inner">
     <label>Type</label>
      <input class="validate[required] form-control" style="width:90%" name="type" type="text" class="style1" id="type">
    </div>
	<div class="form-group-inner">
     <label>Name</label>
      <input class="validate[required] form-control" style="width:90%" name="name" type="text" class="style1" id="name">
   </div>
	<div class="form-group-inner">
     <label>City</label>
      <input class="validate[required] form-control" style="width:90%" name="city" type="text" class="style1" id="city">
   
     </div>
	<div class="login-btn-inner">
		<div class="inline-remember-me">
			<input class="btn btn-sm btn-primary" name="Submit" value="Submit" type="submit"/>
		    <input class="btn btn-sm btn-default" name="Reset" value="Reset" type="reset">
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

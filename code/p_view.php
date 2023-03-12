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
                    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                        <div class="sparkline12-list mg-b-30">
                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <h1>Patient Details &nbsp;<a href="p_form.php" class="btn btn-success">Add New</a></h1>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div class="static-table-list">
                                    <table class="table hover-table">
                                        <thead>
  <tr>
    <th width="57" scope="col"><div align="center"><strong>SL</strong></div></th>
    <th width="250" scope="col"><div align="center"><strong>Doctor</strong></div></th>
    <th width="171" scope="col"><div align="center"><strong>First Name </strong></div></th>
    <th width="127" scope="col"><div align="center"><strong>Last Name</strong></div></th>
    <th width="154" scope="col"><div align="center"><strong>Mobile</strong></div></th>
    <th width="161" scope="col"><div align="center"><strong>Address</strong></div></th>
    <th width="113" scope="col"><div align="center"><strong>Action</strong></div></th>
  </tr>
	</thead>
	<tbody>
    <tr>
    <?php
  $i=0;
  require'dbconnect.php';
  $res=mysqli_query($con,"select * from patient_details p, doctor_details d where p.d_id=d.d_id");
  while($row=mysqli_fetch_array($res))
  {
  $i++;
  $id=$row['p_id'];
  ?>
  <tr>
    <th scope="row"><div align="center"><?php echo $i; ?></div></th>
    <td><div align="center"><?php echo $row['d_fname']; ?> <?php echo $row['d_lname']; ?></div></td>
    <td><div align="center"><?php echo $row['fname']; ?></div></td>
    <td><div align="center"><?php echo $row['lname']; ?></div></td>
    <td><div align="center"><?php echo $row['mobile']; ?></div></td>
    <td><div align="center"><?php echo $row['address']; ?></div></td>
      <td><div align="center"><a class="btn btn-info btn-sm" onClick="return confirm('Do you really want to Edit ...?')" href="p_edit.php?id=<?php echo $id; ?>"> Edit</a> <a class="btn btn-danger btn-sm" onClick="return confirm('Do you really want to Delete...?')" href="p_delete.php?id=<?php echo $id; ?>">  Delete</a> </div></td>
  </tr>
  <?php
  }
  ?>
</tbody>
                                    </table>
                                </div>
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
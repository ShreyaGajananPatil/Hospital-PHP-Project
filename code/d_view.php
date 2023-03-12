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
                                    <h1>Doctor Details &nbsp;<a href="d_form.php" class="btn btn-success">Add New</a></h1>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div class="static-table-list">
                                    <table class="table hover-table">
                                        <thead>
    <tr>

    <th width="70" scope="col"><div align="center"><strong>SL</strong></div></th>
    <th width="220" scope="col"><div align="center"><strong>Hospital Name </strong></div></th>
    <th width="143" scope="col"><div align="center"><strong>First Name </strong></div></th>
    <th width="158" scope="col"><div align="center"><strong>Last Name </strong></div></th>
    <th width="199" scope="col"><div align="center"><strong>Specialization</strong></div></th>
    <th width="230" scope="col"><div align="center"><strong>Contact</strong></div></th>
    <th width="228" scope="col"><div align="center"><strong>Action</strong></div></th>
  </tr>
	</thead>
	<tbody>
    <tr>
  <?php
  $i=0;
  require'dbconnect.php';
  $res=mysqli_query($con,"select * from doctor_details d, hospital_details h where d.h_id=h.h_id");
  while($row=mysqli_fetch_array($res))
  {
  $i++;
  $id=$row['d_id'];
  ?>
  <tr>
    <th scope="row"><div align="center"><?php echo  $i; ?></div></th>
    <td><div align="center"><?php echo $row['h_name']; ?> </div></td>
    <td><div align="center"><?php echo $row['d_fname']; ?></div></td>
    <td><div align="center"><?php echo $row['d_lname']; ?></div></td>
    <td><div align="center"><?php echo $row['d_specialization']; ?></div></td>
    <td><div align="center"><?php echo $row['d_connu']; ?></div></td>
      <td><div align="center"><a class="btn btn-info btn-sm" onClick="return confirm('Do you really want to Edit ...?')" href="d_edit.php?id=<?php echo $id; ?>"> Edit</a> <a class="btn btn-danger btn-sm" onClick="return confirm('Do you really want to Delete...?')" href="d_delete.php?id=<?php echo $id; ?>">  Delete</a> </div></td>
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
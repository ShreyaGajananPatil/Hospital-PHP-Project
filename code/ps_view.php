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
                                    <h1>Prisciption Details &nbsp;<a href="ps_form.php" class="btn btn-success">Add New</a></h1>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div class="static-table-list">
                                    <table class="table hover-table">
                                        <thead>
  <tr>
    <th width="63" scope="col"><div align="center"><strong>SL</strong></div></th>
    <th width="330" scope="col"><div align="center"><strong>Prisciption </strong></div></th>
    <th width="348" scope="col"><div align="center"><strong>Patient</strong></div></th>
    <th width="247" scope="col"><div align="center"><strong>Date</strong></div></th>
    <th width="247" scope="col"><div align="center"><strong>Action</strong></div></th>
   </tr>
	</thead>
	<tbody>
    <tr>
    <?php
  $i=0;
  require'dbconnect.php';
  $res=mysqli_query($con,"select * from prisciption_details ps,patient_details p where ps.p_id=p.p_id");
  while($row=mysqli_fetch_array($res))
  {
  $i++;
  $id=$row['ps_id'];
  ?>
  <tr>
    <th scope="row"><div align="center"><?php echo  $i; ?></div></th>
    <td><div align="center"><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></div></td>
    <td><div align="center"><?php echo $row['prisciption']; ?></div></td>
    <td><div align="center"><?php echo $row['s_date']; ?></div></td>
      <td><div align="center"><a class="btn btn-info btn-sm" onClick="return confirm('Do you really want to Edit ...?')" href="ps_edit.php?id=<?php echo $id; ?>"> Edit</a> <a class="btn btn-danger btn-sm" onClick="return confirm('Do you really want to Delete...?')" href="ps_delete.php?id=<?php echo $id; ?>">  Delete</a> </div></td>
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

<?php 
		include("include/header.php");
		include("include/sidebar.php");

?>
<style>
<style type="text/css" media="print">
@media print {
  @page {
    margin: 0.3in 1in 0.3in 1in !important
  }

}
</style>
</style>
            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Enrolled Student</h4>
                                    <div>
                                       <button class="btn btn-info btn-md" data-bs-toggle="modal" data-bs-target="#add-modal" > Add Enrolled Student </button>
                                       <button class="btn btn-primary btn-md" data-bs-toggle="modal" data-bs-target="#standard-modal" > Import Enrolled Student </button>
                                    </div>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->  

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                    <div class="table-responsive">
                                       

                                        <table id="datatable" class="table nowrap w-100">
                                            <thead>

                                                <tr>
                                                    <th>Last Name</th>												
                                                    <th>First Name</th>
                                                    <th>Middle Name</th>
                                                    <th>Student No.</th>													
                                                    <th>Address</th>
                                                    <th>School</th>
                                                    <th>School Address</th>
                                                    <th>Program</th>
                                                    <th>Remarks</th>
                                                    <th>Category</th>
                                                    <th>Date Addedd</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                        
                                            <tbody>
											<?php
											
												 if(isset($_GET['import'])){
													$is_users = $mysqli->query("SELECT * from cvsu_enrolled_students where form_137 ='' and status = 0");
												 }
												 
												 if(isset($_GET['form137'])){
													$is_users = $mysqli->query("SELECT * from cvsu_enrolled_students where form_137 !='' ");
												 }
												 
												 if(isset($_GET['request'])){
													$is_users = $mysqli->query("SELECT * from cvsu_enrolled_students where status ='1' ");
												 }
												 
												 while($val = $is_users->fetch_object()){
											?>
                                                <tr>
													<td><?= $val->lname ;?></td>
                                                    <td><?= $val->fname ;?></td>
                                                    <td><?= $val->mname ;?></td>
                                                    <td><?= $val->control_number;?></td>
                                                    <td><?= $val->address;?></td>
                                                    <td><?= $val->school;?></td>
                                                    <td><?= $val->school_address;?></td>
                                                    <td><?= $val->program;?></td>
                                                    <td><?= $val->remarks;?></td>
                                                    <td><?= $val->category;?></td>
                                                    <td><?= $val->date_added;?></td>
                                                    <td>
													<?php  if(isset($_GET['form137'])){ ?>
													<button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#file<?= $val->id;?>"> File </button>
													<button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#delete<?= $val->id;?>"> Delete </button>
													<?php } else { ?>
													<button class="btn btn-info btn-sm" style="width:30%" data-bs-toggle="modal" data-bs-target="#upload<?= $val->id;?>" > Upload <?php if($val->category == 'New') { echo "Form 137";} else { echo "TOR";}?> </button>
													<button class="btn btn-primary btn-sm" style="width:30%" data-bs-toggle="modal" data-bs-target="#request<?= $val->id;?>"> Print <?php if($val->category == 'New') { echo "Form 137";} else { echo "TOR";}?> Request </button>
													<button class="btn btn-success btn-sm" style="width:20%" data-bs-toggle="modal" data-bs-target="#update<?= $val->id;?>"> Update </button>
													<button class="btn btn-warning btn-sm" style="width:20%" data-bs-toggle="modal" data-bs-target="#delete<?= $val->id;?>"> Delete </button>
													<?php } ?>
													</td>
                                                </tr>
												 <div id="upload<?= $val->id;?>" class="modal fade" tabindex="-1" role="dialog"
														aria-labelledby="standard-modalLabel" aria-hidden="true">
													<div class="modal-dialog">
													   <div class="modal-content">
															<div class="modal-header">
																<h4 class="modal-title" id="standard-modalLabel">Upload <?php if($val->category == 'New') { echo "Form 137";} else { echo "TOR";}?> </h4>
																  <button type="button" class="btn-close" data-bs-dismiss="modal"
																	aria-label="Close"></button>
															</div>
															<div class="modal-body">
															<form method="POST" enctype="multipart/form-data">
															<i>(Upload <?php if($val->category == 'New') { echo "Form 137";} else { echo "TOR";}?> )</i>
															   <input type="file"  name="file" class="form-control"  required> 
															   <input type="hidden"  name="id" value="<?= $val->id;?>"> 
															</div>
															<div class="modal-footer">
															<button type="button" class="btn btn-light"
																 data-bs-dismiss="modal">Close</button>
															<button type="submit" name="upload" class="btn btn-primary">Upload</button>
															 </div>
															</form>
														 </div><!-- /.modal-content -->
												   </div><!-- /.modal-dialog -->
												</div><!-- /.modal --> 
												
												<div id="file<?= $val->id;?>" class="modal fade" tabindex="-1" role="dialog"
													aria-labelledby="standard-modalLabel" aria-hidden="true">
													<div class="modal-dialog modal-xl">
													   <div class="modal-content">
															<div class="modal-header">
																<h4 class="modal-title" id="standard-modalLabel"> File</h4>
																  <button type="button" class="btn-close" data-bs-dismiss="modal"
																	aria-label="Close"></button>
															</div>
															<div class="modal-body">
															<embed src="../assets/file/<?= $val->form_137;?>" width="100%" height="800px">
															</div>
															<div class="modal-footer">
															<button type="button" class="btn btn-light"
																 data-bs-dismiss="modal">Close</button>
															<button type="submit" name="upload" class="btn btn-primary">Upload</button>
															 </div>
														 </div><!-- /.modal-content -->
												   </div><!-- /.modal-dialog -->
												</div><!-- /.modal -->
												
												 <div id="update<?= $val->id;?>" class="modal fade" tabindex="-1" role="dialog"
														aria-labelledby="standard-modalLabel" aria-hidden="true">
													<div class="modal-dialog">
													   <div class="modal-content">
															<div class="modal-header">
																<h4 class="modal-title" id="standard-modalLabel">Update Student Data</h4>
																  <button type="button" class="btn-close" data-bs-dismiss="modal"
																	aria-label="Close"></button>
															</div>
															<div class="modal-body">
															<form method="POST" enctype="multipart/form-data">
															    <input type="hidden"  name="id" value="<?= $val->id;?>"> 
																<div class="mb-3">
																	<label for="simpleinput" class="form-label">Control Number</label>
																	<input type="text" name="control_number"  value="<?= $val->control_number;?>" class="form-control" fdprocessedid="zi48qu">
																</div>
																<div class="mb-3">
																	<label for="simpleinput" class="form-label">First Name </label>
																	<input type="text" name="fname"  class="form-control"  value="<?= $val->fname;?>" fdprocessedid="zi48qu">
																</div>
																<div class="mb-3">
																	<label for="simpleinput" class="form-label">Last Name </label>
																	<input type="text" name="lname"  class="form-control"  value="<?= $val->lname;?>" fdprocessedid="zi48qu">
																</div>
																<div class="mb-3">
																	<label for="simpleinput" class="form-label">Middle Name </label>
																	<input type="text" name="mname"  class="form-control"  value="<?= $val->mname;?>" fdprocessedid="zi48qu">
																</div>
																<div class="mb-3">
																	<label for="simpleinput" class="form-label">Address </label>
																	<input type="text" name="address"  class="form-control" value="<?= $val->address;?>" fdprocessedid="zi48qu">
																</div>
																<div class="mb-3">
																	<label for="simpleinput" class="form-label">School </label>
																	<input type="text" name="school"  class="form-control" value="<?= $val->school;?>" fdprocessedid="zi48qu">
																</div>
																<div class="mb-3">
																	<label for="simpleinput" class="form-label">School Address </label>
																	<input type="text" name="school_address" value="<?= $val->school_address;?>" class="form-control" fdprocessedid="zi48qu">
																</div>
																<div class="mb-3">
																	<label for="simpleinput" class="form-label">Program </label>
																	<input type="text" name="program" value="<?= $val->program;?>"  class="form-control" fdprocessedid="zi48qu">
																</div>
																<div class="mb-3">
																	<label for="simpleinput" class="form-label">Remarks </label>
																	
																	<select type="text" name="remarks" class="form-control" fdprocessedid="zi48qu">
																			<option value=""> - Select - </option>
																			<option value="Complete"  <?php if($val->category == 'Complete'){ echo "selected";} else {}?>> Complete </option>
																			<option value="Incomplete" <?php if($val->category == 'Incomplete'){ echo "selected";} else {}?>> Incomplete </option>
																	</select>
																	
																</div>
																	<div class="mb-3">
																		<label for="simpleinput" class="form-label">Category </label>
																		<select type="text" name="category" class="form-control" fdprocessedid="zi48qu">
																			<option value=""> - Select - </option>
																			<option value="New"  <?php if($val->category == 'New'){ echo "selected";} else {}?>> New </option>
																			<option value="Transferee" <?php if($val->category == 'Transferee'){ echo "selected";} else {}?>> Transferee </option>
																		</select>
																	</div>
															</div>
															<div class="modal-footer">
															<button type="button" class="btn btn-light"
																 data-bs-dismiss="modal">Close</button>
															<button type="submit" name="update" class="btn btn-primary">Update</button>
															 </div>
															</form>
														 </div><!-- /.modal-content -->
												   </div><!-- /.modal-dialog -->
												</div><!-- /.modal -->
												
												 <div id="delete<?= $val->id;?>" class="modal fade" tabindex="-1" role="dialog"
														aria-labelledby="standard-modalLabel" aria-hidden="true">
													<div class="modal-dialog">
													   <div class="modal-content">
															<div class="modal-header">
																<h4 class="modal-title" id="standard-modalLabel">Delete Data</h4>
																  <button type="button" class="btn-close" data-bs-dismiss="modal"
																	aria-label="Close"></button>
															</div>
															<div class="modal-body">
															<form method="POST" enctype="multipart/form-data">
															Are you sure to delete this data?
															   <input type="hidden"  name="id" value="<?= $val->id;?>"> 
															</div>
															<div class="modal-footer">
															<button type="button" class="btn btn-light"
																 data-bs-dismiss="modal">Close</button>
															<button type="submit" name="delete" class="btn btn-primary">Delete</button>
															 </div>
															</form>
														 </div><!-- /.modal-content -->
												   </div><!-- /.modal-dialog -->
												</div><!-- /.modal -->
												
												 <div id="request<?= $val->id;?>" class="modal fade request" tabindex="-1" role="dialog"
														aria-labelledby="standard-modalLabel" aria-hidden="true">
													<div class="modal-dialog modal-lg">
													   <div class="modal-content">
															<div class="modal-header">
																<h4 class="modal-title" id="standard-modalLabel">Request Letter for Form 137</h4>
																  <button type="button" class="btn-close" data-bs-dismiss="modal"
																	aria-label="Close"></button>
															</div>
															<div class="modal-body">
															<form method="POST" enctype="multipart/form-data">
															
															   <input type="hidden"  id="request-id" name="id" value="<?= $val->id;?>"> 
															   <div id="printableArea">
																    <p style="margin-top:0pt; margin-bottom:0pt;"><a name="_Hlk61339277"></a><a name="_Hlk61339276"><span style="height:0pt; display:block; position:absolute; z-index:-1;"><img src="data:image/jpeg;base64,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" width="108" height="96" alt="Description: logo-CvSU-2" style="margin: 0 0 0 auto; display: block; "></span><span style="font-family:Arial;">&nbsp;</span></a></p>
																	<p style="margin-top:0pt; margin-bottom:0pt; text-align:center;"><span style="font-family:Arial;">Republic of the Philippines</span></p>
																	<p style="margin-top:0pt; margin-bottom:0pt; font-size:14pt;"><strong><span style="width:37.5pt; font-family:Arial; display:inline-block;">&nbsp;</span></strong><strong>
																	<span style="width:101.99pt; font-family:Arial; display:inline-block;"></span></strong><strong><span style="font-family:Arial;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CAVITE STATE UNIVERSITY</span></strong></p>
																	<p style="margin-top:0pt; margin-bottom:0pt; text-align:center;"><strong><span style="font-family:Arial;">Carmona Campus</span></strong></p>
																	<p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span style="font-family:Arial;">Market Road, Carmona, Cavite</span></p>
																	<p style="margin-top:0pt; margin-bottom:0pt; text-align:center;"><span style="font-family:Arial;">&nbsp;</span></p>
																	<p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span style="font-family:Arial;">&nbsp;</span></p>
																	<p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:15pt;">
																	<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAACEAAAAABCAYAAADUrklSAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAAmSURBVGhD7cMBCQAACAOw949lMBVjCBsspyujqqqqqqqqqvpzZgGxd6ZMebcCSQAAAABJRU5ErkJggg==" width="100%" height="1" alt="" style="float: left; "><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAACEAAAAAECAYAAACEY9jhAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAABGSURBVHhe7cgxDQAwDAOwlvmYdwRCIJIPP555ewAAAAAAAAAA1WICAAAAAAAAADSJCQAAAAAAAADQJCYAAAAAAAAAQI29D+CbguCZ8m+yAAAAAElFTkSuQmCC" width="100%" height="4" alt="" style="float: left; "><strong>
																	<span style="font-family:Arial;">OFFICE OF THE CAMPUS REGISTRAR</span></strong></p>
																	<p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span style="font-family:'Bookman Old Style';">&nbsp;</span></p>
																	<p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;"><span style="font-family:'Maiandra GD';">&nbsp;</span></p>
																	<span style="width:36pt; display:inline-block;">&nbsp;</span>Date: <?php echo date("F, d Y");?></p>
																	<p style="margin-top:0pt; margin-bottom:0pt;"><strong><u>THE REGISTRAR</u></strong></p>
																	<p style="margin-top:0pt; margin-bottom:0pt;"><strong><u><?= $val->school;?>___________</u></strong></p>
																	<p style="margin-top:0pt; margin-bottom:0pt;"><strong><u><?= $val->school_address;?>__________________</u></strong></p>
																	<p style="margin-top:0pt; margin-bottom:0pt;"><strong>&nbsp;</strong></p>
																	<p style="margin-top:0pt; margin-bottom:0pt;"><strong>&nbsp;</strong></p>
																	<p style="margin-top:0pt; margin-bottom:0pt;"><strong>&nbsp;</strong></p>
																	<p style="margin-top:0pt; margin-bottom:0pt;">Sir / Madam:</p>
																	<p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>
																	<p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>
																	<p style="margin-top:0pt; margin-bottom:0pt;"><span style="width:36pt; display:inline-block;">&nbsp;</span>Our record shows that the following students listed below are temporarily enrolled in this University. Please furnish us a copy of their 
																	<?php if($val->category == 'New'){?>
																	<strong><u>FORM 137 with remarks COPY FOR CAVITE STATE UNIVERSITY-CARMONA Campus.</u></strong>
																	<?php } else { ?>
																	<strong><u>TOR with remarks COPY FOR CAVITE STATE UNIVERSITY-CARMONA Campus.</u></strong>
																	<?php } ?>
																	</p>
																	<p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>
																	<p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>
																	<p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>
																	<ol type="1" style="margin:0pt; padding-left:0pt;">
																		<li style="margin-left:30.59pt; padding-left:5.41pt;">_____________________</li>
																	</ol>
																
																	<p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>
																	<p style="margin-top:0pt; margin-bottom:0pt;">Please entrust to the bearer.</p>
																	<p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>
																	<p style="margin-top:0pt; margin-bottom:0pt;">Thank you very much!</p>
																	<p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>
																	<p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>
																	<p style="margin-top:0pt; margin-bottom:0pt;"><span style="width:36pt; display:inline-block;">&nbsp;</span><span style="width:36pt; display:inline-block;">&nbsp;</span><span style="width:36pt; display:inline-block;">&nbsp;</span><span style="width:36pt; display:inline-block;">&nbsp;</span><span style="width:36pt; display:inline-block;">&nbsp;</span><span style="width:36pt; display:inline-block;">&nbsp;</span><span style="width:36pt; display:inline-block;">&nbsp;</span><span style="width:36pt; display:inline-block;">&nbsp;</span>Very truly yours,</p>
																	<p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>
																	<p style="margin-top:0pt; margin-bottom:0pt;"><span style="width:36pt; display:inline-block;">&nbsp;</span><span style="width:36pt; display:inline-block;">&nbsp;</span><span style="width:36pt; display:inline-block;">&nbsp;</span><span style="width:36pt; display:inline-block;">&nbsp;</span><span style="width:36pt; display:inline-block;">&nbsp;</span><span style="width:36pt; display:inline-block;">&nbsp;</span><span style="width:36pt; display:inline-block;">&nbsp;</span><span style="width:36pt; display:inline-block;">&nbsp;</span><strong>JOSEPH E. CUAREZ</strong></p>
																	<p style="margin-top:0pt; margin-bottom:0pt;"><strong><span style="width:36pt; display:inline-block;">&nbsp;</span></strong><strong><span style="width:36pt; display:inline-block;">&nbsp;</span></strong><strong><span style="width:36pt; display:inline-block;">&nbsp;</span></strong><strong><span style="width:36pt; display:inline-block;">&nbsp;</span></strong><strong><span style="width:36pt; display:inline-block;">&nbsp;</span></strong><strong><span style="width:36pt; display:inline-block;">&nbsp;</span></strong><strong><span style="width:36pt; display:inline-block;">&nbsp;</span></strong><strong><span style="width:36pt; display:inline-block;">&nbsp;</span></strong><strong>&nbsp;</strong>Campus Registrar</p>
																	<p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>
																	<p style="margin-top:0pt; margin-bottom:0pt;">Very Urgent</p>
																	<p style="margin-top:0pt; margin-bottom:0pt;">1<span style="font-size:6.67pt;"><sup>st</sup></span> Request<span style="width:24.26pt; display:inline-block;">&nbsp;</span><span style="width:36pt; display:inline-block;">&nbsp;</span><u>X</u></p>
																	<p style="margin-top:0pt; margin-bottom:0pt;">2<span style="font-size:6.67pt;"><sup>nd</sup></span> Request</p>
																	<p style="margin-top:0pt; margin-bottom:0pt;">Follow-up</p>
																	<p style="margin-top:0px; margin-bottom:200px;">
																	<span style="height:0pt; display:block; position:absolute; z-index:0;"><img src="data:image/png;base64,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" width="784" height="156" alt="" style="margin: 0 0 0 auto; display: block; "></span><span style="width:36pt; display:inline-block;">&nbsp;</span><span style="width:36pt; display:inline-block;">&nbsp;</span><span style="width:36pt; display:inline-block;">&nbsp;</span><span style="width:36pt; display:inline-block;">&nbsp;</span><span style="width:36pt; display:inline-block;">&nbsp;</span><span style="width:36pt; display:inline-block;">&nbsp;</span><span style="width:36pt; display:inline-block;">&nbsp;</span><span style="width:36pt; display:inline-block;">&nbsp;</span>
																</div>
															</div>
															<div class="modal-footer">
															<button type="button" class="btn btn-light"
																 data-bs-dismiss="modal">Close</button>
															<button type="button"   onclick="printDiv('printableArea',<?= $val->id;?>)" name="upload" class="btn btn-primary">Print</button>
															 </div>
															</form>
														 </div><!-- /.modal-content -->
												   </div><!-- /.modal-dialog -->
												</div><!-- /.modal -->
												 <?php } ?>
                                   
                                            </tbody>
                                        </table>

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->

                </div> <!-- content -->
				
				
                <div id="standard-modal" class="modal fade" tabindex="-1" role="dialog"
                                        aria-labelledby="standard-modalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                       <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="standard-modalLabel">Import Data</h4>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
							<form method="POST" enctype="multipart/form-data">
                               <input type="file"  name="file" class="form-control" accept=".csv" required> 
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-light"
                                 data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="import" class="btn btn-primary">Import</button>
                             </div>
							</form>
                         </div><!-- /.modal-content -->
                   </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
				
				<div id="add-modal" class="modal fade" tabindex="-1" role="dialog"
                                        aria-labelledby="standard-modalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                       <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="standard-modalLabel">Enrollee Data</h4>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
							<form method="POST"  enctype="multipart/form-data">
								<div class="mb-3">
                                    <label for="simpleinput" class="form-label">Last Name </label>
                                    <input type="text" name="lname"  class="form-control" fdprocessedid="zi48qu">
                                </div>
                               
								<div class="mb-3">
                                    <label for="simpleinput" class="form-label">First Name </label>
                                    <input type="text" name="fname"  class="form-control" fdprocessedid="zi48qu">
                                </div>
								
									<div class="mb-3">
                                    <label for="simpleinput" class="form-label">Middle Name </label>
                                    <input type="text" name="mname"  class="form-control" fdprocessedid="zi48qu">
                                </div>
								 <div class="mb-3">
                                    <label for="simpleinput" class="form-label">Student Number</label>
                                    <input type="text" name="control_number" class="form-control" fdprocessedid="zi48qu">
                                </div>
								<div class="mb-3">
                                    <label for="simpleinput" class="form-label">Address </label>
                                    <input type="text" name="address"  class="form-control" fdprocessedid="zi48qu">
                                </div>
								<div class="mb-3">
                                    <label for="simpleinput" class="form-label">School </label>
                                    <input type="text" name="school"  class="form-control" fdprocessedid="zi48qu">
                                </div>
								<div class="mb-3">
                                    <label for="simpleinput" class="form-label">School Address </label>
                                    <input type="text" name="school_address" class="form-control" fdprocessedid="zi48qu">
                                </div>
								<div class="mb-3">
                                    <label for="simpleinput" class="form-label">Program </label>
                                    <input type="text" name="program" class="form-control" fdprocessedid="zi48qu">
                                </div>
								<div class="mb-3">
                                    <label for="simpleinput" class="form-label">Remarks </label>
									  <select type="text" name="remarks" class="form-control" fdprocessedid="zi48qu">
										<option value=""> - Select - </option>
										<option value="Complete"> Complete </option>
										<option value="Incomplete"> Incomplete </option>
									</select>
                                </div>
								<div class="mb-3">
                                    <label for="simpleinput" class="form-label">Category </label>
                                    <select type="text" name="category" class="form-control" fdprocessedid="zi48qu">
										<option value=""> - Select - </option>
										<option value="New"> New </option>
										<option value="Transferee"> Transferee </option>
									</select>
                                </div>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-light"
                                 data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="process" class="btn btn-primary">Process</button>
                             </div>
							</form>
                         </div><!-- /.modal-content -->
                   </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

    <?php 
		include("include/footer.php");
  		include("include/enrolled.php");
	?>
	<script>
	 $(document).ready(function() {
            $('#datatable').DataTable({
                     language: {
                     paginate: {
                     previous: "<i class='mdi mdi-chevron-left'>",
                     next: "<i class='mdi mdi-chevron-right'>"
                     }
               },
               drawCallback: function() {
                     $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
               }, order: [[7, 'desc']]
            });
    });

	</script>
	<script>
	function printDiv(divId, rid) {
    var printContents = document.getElementById(divId).innerHTML;
    var originalTitle = document.title;

    // Create a hidden iframe for printing
    var printFrame = document.createElement('iframe');
    printFrame.name = 'printFrame';
    printFrame.style.position = 'absolute';
    printFrame.style.top = '-10000px';
    document.body.appendChild(printFrame);

    var frameDoc = printFrame.contentWindow || printFrame.contentDocument;
    if (frameDoc.document) frameDoc = frameDoc.document;

    frameDoc.open();
    frameDoc.write('<html><head><title>' + originalTitle + '</title>');
    frameDoc.write('</head><body>');
    frameDoc.write(printContents);
    frameDoc.write('</body></html>');
    frameDoc.close();

    frameDoc.defaultView.focus();
    frameDoc.defaultView.print();

    // Remove iframe after printing
    frameDoc.defaultView.onafterprint = function () {
        document.body.removeChild(printFrame);
    };

    // Optional AJAX
    $.post('include/process', {
        id: rid,
        request: 'request'
    }, 'json');
}

	</script>
	<script>
	$('.request').on('hidden.bs.modal', function () {
		location.reload();
	});
	</script>
<?php 
		include("include/header.php");
		include("include/sidebar.php");
		

		$import = $mysqli->query("SELECT * from cvsu_enrolled_students where form_137 ='' and status = 0");
		$form137 = $mysqli->query("SELECT * from cvsu_enrolled_students where form_137 !='' ");
		$request = $mysqli->query("SELECT * from cvsu_enrolled_students where status ='1' ");

?>

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Dashboard</h4>
                                    
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
						<h4> WELCOME TO FORM-137 MANAGEMENT SYSTEM </h4>
						<hr>
                        <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <div class="widget-rounded-circle card bg-purple shadow-none">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-lg rounded-circle bg-soft-light">
                                                    <i class="fe-users font-28 avatar-title text-white"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <h2 class="text-white mt-2"><span data-plugin="counterup"><?=  $import->num_rows; ?></span></h2>
                                                    <p class="text-white mb-0 text-truncate"> Enrolled Student</p>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-4">
                                <div class="widget-rounded-circle card bg-info shadow-none">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-lg rounded-circle bg-soft-light">
                                                    <i class="fe-check font-28 avatar-title text-white"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <h2 class="text-white mt-2"><span data-plugin="counterup"><?=  $form137->num_rows; ?></span></h2>
                                                    <p class="text-white mb-0 text-truncate">Uploaded Form 137</p>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-4">
                                <div class="widget-rounded-circle card bg-success shadow-none">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-lg rounded-circle bg-soft-light">
                                                    <i class="fe-clipboard font-28 avatar-title text-white"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <h2 class="text-white mt-2"><span data-plugin="counterup"><?=  $request->num_rows; ?></span></h2>
                                                    <p class="text-white mb-0 text-truncate">Requested Form 137</p>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->

                     
                        <!-- end row -->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

  
  <?php include("include/footer.php");?>
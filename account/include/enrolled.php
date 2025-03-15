<?php

		 if(isset($_POST['import'])){
		
				error_reporting(0);
				
				 $filename=$_FILES["file"]["tmp_name"];

				$row         = 0;
                $p_amount    = 0;
			    $dimension   = 0;
			    $box_amount  = 0;
				$size_amount = 0;
				$p_size      = 0;

				

				$register_at         = date('Y-m-d H:i:s',time());


                 if($_FILES["file"]["size"] > 0)
                 {
 
                 $file = fopen($filename, "r");

				 fgetcsv($file, 1000, ",");
				 $num = 0;
                 while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
                 {
					$empty_filesop = array_filter( array_map('trim', $emapData));
					$csv_data = array_map('str_getcsv', file($_FILES["file"]["tmp_name"]));

					if( !empty( $empty_filesop ) ){

				
						

						
							
								$fname          =  $emapData[0];
								$lname          =  $emapData[1];
								$mname          =  $emapData[2];
								$address        =  $emapData[3];
								$school         =  $emapData[4];
								$school_address = $emapData[5];
								$control_number = $emapData[6];
								$program        = $emapData[7];
								$remarks        = $emapData[8];
								$category       = $emapData[9];
								$date_added     = $register_at;
							
								
								
							$mysqli->query("INSERT INTO cvsu_enrolled_students 
								(
									fname,
									lname,
									mname,
									address,
									school,
									school_address,
									control_number,
									program,
									remarks,
									status,
									category,
									date_added
								) 
								VALUES 
								(
									'$fname',
									'$lname',
									'$mname',
									'$address',
									'$school',
									'$school_address',
									'$control_number',
									'$program',
									'$remarks',
									'$status',
									'$category',
									'$date_added'
								)
							");
							
					
							  echo '<script>
								  $(document).ready(function() {
										Swal.fire({
												title: "Success! ",
												text: "Enrolled Student List Imported",
												icon: "success",
												type: "success"
												}).then(function(){
													window.location = "enrolled-list?import";
												});
												});
								</script>';
				}
							
							
							
						
					}
				}
							
				 
		 }
		 
		 if(isset($_POST['process'])){
		
				

				$register_at    = date('Y-m-d H:i:s',time());

				$fname          =  $_POST['fname'];
				$lname          =  $_POST['lname'];
				$mname          =  $_POST['mname'];
				$address        =  $_POST['address'];
				$school         =  $_POST['school'];
				$school_address =  $_POST['school_address'];
				$control_number =  $_POST['control_number'];
				$program        =  $_POST['program'];
				$remarks        =  $_POST['remarks'];
				$category       =  $_POST['category'];
				$date_added     =  $register_at;
							
								
								
				$mysqli->query("INSERT INTO cvsu_enrolled_students 
								(
									fname,
									lname,
									mname,
									address,
									school,
									school_address,
									control_number,
									program,
									remarks,
									category,
									date_added
								) 
								VALUES 
								(
									'$fname',
									'$lname',
									'$mname',
									'$address',
									'$school',
									'$school_address',
									'$control_number',
									'$program',
									'$remarks',
									'$category',
									'$date_added'
								)
				");
							
					
				 echo '<script>
								  $(document).ready(function() {
										Swal.fire({
												title: "Success! ",
												text: "Enrolled Student Data Added",
												icon: "success",
												type: "success"
												}).then(function(){
													window.location = "enrolled-list?import";
												});
												});
				</script>';
				
				 
		 }
		 
		  if(isset($_POST['update'])){
		
				


				$fname          =  $_POST['fname'];
				$lname          =  $_POST['lname'];
				$mname          =  $_POST['mname'];
				$address        =  $_POST['address'];
				$school         =  $_POST['school'];
				$school_address =  $_POST['school_address'];
				$control_number =  $_POST['control_number'];
				$program        =  $_POST['program'];
				$remarks        =  $_POST['remarks'];
				$id             =  $_POST['id'];
							
								
								
				$mysqli->query("UPDATE  cvsu_enrolled_students 
								SET
									fname          = '$fname',
									lname          = '$lname',
									mname          = '$mname',
									address        = '$address',
									school         = '$school',
									school_address = '$school_address',
									control_number = '$control_number',
									program        = '$program',
									remarks        = '$remarks'
								where id           = '$id'
				");
							
					
				 echo '<script>
								  $(document).ready(function() {
										Swal.fire({
												title: "Success! ",
												text: "Enrolled Student Data Updated",
												icon: "success",
												type: "success"
												}).then(function(){
													window.location = "enrolled-list?import";
												});
												});
				</script>';
				
				 
		 }
		 
		 
		 
		 
		 if (isset($_POST['upload'])) {

			$filename = $_FILES["file"]["name"];
			$tempname = $_FILES["file"]["tmp_name"];
			$folder = "../assets/file/" . $filename;
			
			$id     = $_POST['id'];

			if (move_uploaded_file($tempname, $folder)) {
				
				$mysqli->query("UPDATE cvsu_enrolled_students SET form_137 = '$filename', remarks = 'Complete' where id = '$id'");

			} else {
				echo "<h3>&nbsp; Failed to upload image!</h3>";
			}

							

			
		}
		
		if (isset($_POST['delete'])) {

			
			$id     = $_POST['id'];

			
				$mysqli->query("DELETE FROM cvsu_enrolled_students where id = '$id'");

			  echo '<script>
								  $(document).ready(function() {
										Swal.fire({
												title: "Success! ",
												text: "Enrolled Student Data Deleted",
												icon: "success",
												type: "success"
												}).then(function(){
													window.location = "enrolled-list?import";
												});
												});
								</script>';
							

			
		}
		
		
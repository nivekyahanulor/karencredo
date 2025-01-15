 <?php
		include('../../controller/database.php'); 
		if (isset($_POST['request'])) {

		
			$id     = $_POST['id'];
				
			$mysqli->query("UPDATE cvsu_enrolled_students SET status = '1' where id = '$id'");
			
		}
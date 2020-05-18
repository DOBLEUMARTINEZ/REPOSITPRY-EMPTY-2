<?php
	session_start();

	if ($_POST['btn_action']=='login') {
		//echo 'admin'; 

		if (isset($_POST['user'])) {
		
			$user = $_POST['user'];
			$password = $_POST['password'];

			//echo $user.'-'.$password;

			include('./conexion.php');

			$sql = "SELECT * FROM user";

	        $result = $mysqli->query($sql);

	        if ($result->num_rows > 0) {

	          	while($row = $result->fetch_array()) {

		            $id  = $row['id'];
		            $user  = $row['user'];
		            $password  = $row['password'];
	        	}

		        //echo $id.'</br>'.$user;

		        $_SESION["user"]=$user;

		        header('location: ./admin.php');

	        }
	        else{
	        	echo "none";
				session_destroy();
				header('../');
				exit();
	        }

		}

	}else{
		echo "none";
		session_destroy();
		header('../');
		exit();
	}


?>
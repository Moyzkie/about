<?php
$mysqli = new mysqli('localhost','root','','wats_aboutus') or die (mysqli_error($mysqli));

$id=0;
//------------INSERT DATA------------------
if(isset($_POST['insert'])){					
 		$desc = $_POST['txtDesc'];
 		$mission = $_POST['txtMission'];
 		$vision = $_POST['txtVision'];
 		$email = $_POST['txtEmail'];
 		$contact = $_POST['txtContact'];
 		$location = $_POST['txtLocation'];

 		$mysqli->query("INSERT INTO `wats_aboutus` (`description`, `mission`, `vision`, `email`, `contactno`, `location`) VALUES ('$desc','$mission','$vision','$email','$contact','$location')") or die ($mysqli_error->error);

 		header('location: about_us.php');  

}		

//-------THIS IS FOR DELETING A DATA USING ID----------------------
if(isset($_GET['delete'])){					
 		$id = $_GET['delete'];
										
 		$mysqli->query("DELETE FROM `wats_aboutus` WHERE id = $id ");
 	}	


//----------RETRIEVE DATA--------------------------------
 if(isset($_GET['edit'])){	
  	$id = $_GET['edit'];

  	$result = $mysqli->query("SELECT *  FROM `wats_aboutus` WHERE id = $id")or die ($mysqli->error());

  	$row = $result->fetch_array();
  	$desc = $row['description'];
 		$mission = $row['mission'];
 		$vision = $row['vision'];
 		$email = $row['email'];
 		$contact = $row['contactno'];
 		$location = $row['location'];
  	}



  if(isset($_POST['update'])){
 		$id = $_POST['id'];
 		$desc = $_POST['txtDesc'];
 		$mission = $_POST['txtMission'];
 		$vision = $_POST['txtVision'];
 		$email = $_POST['txtEmail'];
 		$contact = $_POST['txtContact'];
 		$location = $_POST['txtLocation'];

		$mysqli->query("UPDATE `wats_aboutus` SET description='$desc', mission='$mission' , vision='$vision', email='$email', contactno='$contact', location='$location' WHERE id= $id ")	or die ($mysqli->error);

		header('location: about_us.php');
 	}							//THIS IS FOR EDIT A DATA

										
								

?>
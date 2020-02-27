<?php
$dbserver = "localhost";
$dbusername ="root";
$dbpassword = "";
$dbname = "project";
$conn = mysqli_connect($dbserver,$dbusername,$dbpassword,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else
{
	
      
      $pname = $_POST['name'];
      $dob = $_POST['dob'];
      $phone = $_POST['phone_no'];
      $email = $_POST['email'];
      $password = $_POST['pass'];
      $s_event = $_POST['event_code'];
      $address = $_POST['address'];
      $h_qualification = $_POST['hqualification'];
      $intrest = $_POST['area_of_intrest'];
      $gen = $_POST['gender'];
      $occupation = $_POST['occupation'];
      $handi = $_POST['handicapped'];
      
      $query = "INSERT INTO `participants`(`pemail`, `pname`, `dob`, `ppno`, `ppass`, `pecode`, `paddress`, `pqualification`, `paoi`, `pgender`, `poccupation`, `phandicapped`) VALUES ('$email','$pname','$dob',$phone,'$password','$s_event','$address','$h_qualification','$intrest','$gen','$occupation','$handi')";
      
	$result = mysqli_query($conn,$query);
		
		if ($result == TRUE) {
     echo '<script>

  alert("you are not valid user");
  
  </script>';

			header("location:payment.html");
    }
    	else{

    		echo "error";
    	}
 }
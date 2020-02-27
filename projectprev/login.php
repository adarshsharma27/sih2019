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
	
       
      $myusername = $_POST['email'];
      $mypassword = $_POST['pass'];
      echo $myusername;
      
      $sql = "SELECT * FROM coordinator WHERE cemail ='$myusername' and cpass ='$mypassword'";
     
	$result = mysqli_query($conn,$sql);
	$rows = mysqli_num_rows($result);
	


	
        if($rows==1){
         header("location:coordinatordashboard.html");
         }else{
	echo '<script>

	alert("you are not valid user");
	
	</script>';

	}
    }
      
	


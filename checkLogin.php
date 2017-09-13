<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php


// Create connection
$conn = new mysqli($_SESSION["servername"], $_SESSION["username"], $_SESSION["password"],$_SESSION["dbname"]);


$email = $_REQUEST["email"];
$pwd = $_REQUEST["pwd"];

$sql = "SELECT fName,email,password FROM users WHERE email='$email' and password='$pwd'";
$result=$conn->query($sql);


if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
	
	$_SESSION["pageControl"]=$row["fName"];
	
	header('Location: home.php');
	
	
} else {
	
	if($email=="alfalogin@gmail.com" && $pwd=="alfa12345"){
		$_SESSION["pageControl"]="Admin";
		 header('Location: adminPanel.php');
		 $_SESSION["adminPanl"]="Admin";
	}else{
	 // echo "0 results";
   header('Location: index.php?pl=no');	
		
	}
	
  
}



mysqli_close($conn);

?>
</body>

</html>

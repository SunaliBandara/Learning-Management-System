<?php
// Start the session
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


$nic = $_REQUEST["nic"];
$email = $_REQUEST["email"];
$fName = $_REQUEST["fName"];
$lName = $_REQUEST["lName"];
$contact = $_REQUEST["contact"];
$pwd = $_REQUEST["pwd"];

$sql = "INSERT INTO users (nic, email, fName, lName,contactNumber,password,status) VALUES ('$nic', '$email', '$fName','$lName','$contact','$pwd','bita')";

if (mysqli_query($conn, $sql)) {
   // echo "New record created successfully";
   header('Location: Register.php?id=okay');
} else {
    //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	
	header('Location: Register.php?id=no');
}
mysqli_close($conn);

?>
</body>

</html>

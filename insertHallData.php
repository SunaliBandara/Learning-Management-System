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






$batch = $_REQUEST["batch"];
$moduleName = $_REQUEST["mName"];
$hallNumber = $_REQUEST["hallNumber"];
$time = $_REQUEST["time"];

$sql = "INSERT INTO lechall (batch, moduleName, hallNumber, time) VALUES ('$batch', '$moduleName', '$hallNumber','$time')";

if (mysqli_query($conn, $sql)) {
   // echo "New record created successfully";
   header('Location: adminPanel.php?id=okayHall');
} else {
   //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	
	header('Location: adminPanel.php?id=noHall');
}
mysqli_close($conn);

?>
</body>

</html>

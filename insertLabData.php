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






$batch = $_REQUEST["batch"];
$groupNumber = $_REQUEST["groupNumber"];
$moduleName = $_REQUEST["mName"];
$hallNumber = $_REQUEST["labNumber"];
$time = $_REQUEST["time"];

$sql = "INSERT INTO leclab (batch, groupNumber, moduleName, labNumber,time) VALUES ('$batch', '$groupNumber', '$moduleName','$labNumber','$time')";

if (mysqli_query($conn, $sql)) {
   // echo "New record created successfully";
   header('Location: adminPanel.php?id=okayLab');
} else {
   //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	
	header('Location: adminPanel.php?id=noLab');
}
mysqli_close($conn);

?>
</body>

</html>
